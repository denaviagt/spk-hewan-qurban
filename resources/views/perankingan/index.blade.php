@extends('master')

@section('title', 'Penilaian')

@section('content')

    <div class="content-wrapper">
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
                            @foreach($animal_types as $at_index => $animal_type)
                                @if($animal_type->animals->count() > 0)
                                    <td colspan="3">
                                        <b>{{ $animal_type->name }}</td>
                                    </td>
                                @endif
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
                                            {{ $animal->criteriaAnimals->sum(function ($criteriaAnimal) use ($animal_type, $animal) {
                                                    return $criteriaAnimal->normalizeMatrix($criteriaAnimal->criteria->criteriaAnimals->filter(function($ca) use ($animal_type) {
    return $ca->animal->animalType->id == $animal_type->id;
})) * ($criteriaAnimal->criteria->weight/100);
                                                })  }}
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
