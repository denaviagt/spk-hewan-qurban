@extends('master')

@section('title', 'Penilaian')

@section('content')

    <div class="content-wrapper">

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Table Matriks Keputusan (X)</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th rowspan="2" style="vertical-align:middle">Hewan</th>
                                    <th colspan="5" style="text-align: center">Kriteria</th>
                                </tr>
                                <tr>
                                    @foreach ($criterias as $item)
                                        <th>
                                            {{  $item->criteria }}
                                        </th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($animals as $animal)
                                <tr>
                                    <td>{{ $animal->name }}</td>
                                    @foreach($animal->criteriaAnimals as $criteriaAnimal)
                                        <td>
                                            {{ $criteriaAnimal->score }}
                                        </td>
                                    @endforeach
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Table Bobot Preferensi</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> Nama Kriteria </th>
                                    <th> Type </th>
                                    <th> Bobot </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($criterias as $item)
                                    <tr>
                                        <td>{{ $item->criteria }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->weight }}%</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Table Matriks Ternormalisasi (R)</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th rowspan="2" style="vertical-align:middle">Hewan</th>
                                    <th colspan="5" style="text-align: center">Kriteria</th>
                                </tr>
                                <tr>
                                    @foreach ($criterias as $item)
                                        <th>
                                            {{  $item->criteria }}
                                        </th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($animals as $animal)
                                <tr>
                                    <td>{{ $animal->name }}</td>
                                    @foreach($animal->criteriaAnimals as $criteriaAnimal)
                                        <td>
                                            {{ $criteriaAnimal->criteria->type == "Benefit" ? $criteriaAnimal->score / $animal->criteriaAnimals->where('animal_id', $animal->id)->max("score") : $animal->criteriaAnimals->where('animal_id', $animal->id)->min("score")/$criteriaAnimal->score }}
                                        </td>
                                    @endforeach
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Table Perankingan</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Hewan</th>
                                    <th>Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($animals->orderBy(function ($anim){
                                    return  $animal->criteriaAnimals->sum(function ($crAn) use($animal) {
                                                return ($crAn->criteria->type == "Benefit" ? $crAn->score / $animal->criteriaAnimals->where('animal_id', $animal->id)->max("score") : $animal->criteriaAnimals->where('animal_id', $animal->id)->min("score")/$crAn->score) * ($crAn->criteria->weight/100);
                                            });
}) as $animal)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $animal->name }}</td>
                                    <td>
                                        {{ $animal->criteriaAnimals->sum(function ($crAn) use($animal) {
                                                return ($crAn->criteria->type == "Benefit" ? $crAn->score / $animal->criteriaAnimals->where('animal_id', $animal->id)->max("score") : $animal->criteriaAnimals->where('animal_id', $animal->id)->min("score")/$crAn->score) * ($crAn->criteria->weight/100);
                                            })  }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
