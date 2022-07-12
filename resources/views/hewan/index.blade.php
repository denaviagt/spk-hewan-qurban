@extends('master')

@section('title', 'Daftar Hewan')

@section('content')

    <div class="content-wrapper">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb border-0">
              <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Daftar Hewan</li>
            </ol>
          </nav>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="card-title">Table Daftar Hewan</h4>
                        </div>
                        <div>
                            <a href="{{ url('hewan/add') }}" class="btn btn-primary btn-icon-text">
                                <i class="mdi mdi-plus-circle btn-icon-prepend"></i>
                                Add Data
                            </a>
                        </div>

                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Nama
                                    </th>
                                    <th>
                                        Tipe Hewan
                                    </th>
                                    <th>
                                        Foto
                                    </th>
                                    @foreach($criterias as $criteria)
                                    <th>
                                        {{ $criteria->criteria }}
                                    </th>
                                    @endforeach
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($animals as $animal)
                                <tr>
                                    <td class="py-1">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $animal->name }}
                                    </td>
                                    <td>
                                        {{ $animal->animalType->name }}
                                    </td>
                                    <td>
                                        <img src="{{ asset('images/'. $animal->image) }}" alt="" style="width:100px; height:100px" >
                                    </td>
                                    @foreach($animal->criteriaAnimals as $criteriaAnimal)
                                    <td>
                                        {{ $criteriaAnimal->value }}
                                    </td>
                                    @endforeach
                                    <td>
                                        <a href="" class="btn btn-info btn-rounded btn-icon p-2"
                                            style="width:36px !important; height:36px !important">
                                            <i class="ti-pencil-alt"></i>
                                        </a>
                                        <a href="" class="btn btn-danger btn-rounded btn-icon p-2"
                                            style="width:36px !important; height:36px !important">
                                            <i class="mdi mdi-delete"></i>
                                        </a>

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
