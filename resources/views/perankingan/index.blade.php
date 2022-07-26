@extends('master')

@section('title', 'Penilaian')

@section('content')

    <div class="content-wrapper">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb border-0">
              <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Perankingan</li>
              <li class="breadcrumb-item active" aria-current="page">{{ $animal_type->name }}</li>
            </ol>
          </nav>

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
                                <th>Predikat</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($animal_type->animals->sortByDesc(function ($anim) use ($animal_type){
                                    return  $anim->criteriaAnimals->sum(function ($criteriaAnimal) use ($animal_type, $anim) {
                                                return $criteriaAnimal->score/$criteriaAnimal->criteria->criteriaAnimals->filter(function($ca) use ($animal_type) {
                                                    return $ca->animal->animalType->id == $animal_type->id;
                                                    })->max('score') * ($criteriaAnimal->criteria->weight/100);
                                                                                                });
                                                }) as $animal)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $animal->name }}</td>
                                        <td>
                                            {{ $animal->sumNormalized()  }}
                                        </td>
                                        <td>
                                            {{ $animal->sumNormalized()  }}
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
