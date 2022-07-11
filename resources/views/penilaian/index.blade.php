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
                                <tr>
                                    <td>S1</td>
                                    <td>0.5</td>
                                    <td>0.7</td>
                                    <td>0.1</td>
                                    <td>1</td>
                                    <td>0</td>
                                </tr>
                                
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
                                <tr>
                                    <td>S1</td>
                                    <td>0.5</td>
                                    <td>0.7</td>
                                    <td>0.1</td>
                                    <td>1</td>
                                    <td>0</td>
                                </tr>
                                
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
                                <tr>
                                    <td>1</td>
                                    <td>S1</td>
                                    <td>0987</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
