@extends('master')

@section('title', 'Kriteria')

@section('content')

    <div class="content-wrapper">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb border-0">
              <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Kriteria</li>
            </ol>
          </nav>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Table Kriteria</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Kode Kriteria
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Tipe Kriteria
                                    </th>
                                    <th>
                                        Satuan
                                    </th>
                                    <th>
                                        Bobot
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
{{--                                <tr>--}}
{{--                                    <td class="py-1">--}}
{{--                                        1--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        C1--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        Umur--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        Benefit--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        Tahun--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        20%--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
                                @foreach($data as $criteria)
                                <tr>
                                    <td class="py-1">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        C1
                                    </td>
                                    <td>
                                        {{ $criteria->criteria }}
                                    </td>
                                    <td>
                                        {{ $criteria->type }}
                                    </td>
                                    <td>
                                        Tahun
                                    </td>
                                    <td>
                                        {{ $criteria->weight }}%
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
