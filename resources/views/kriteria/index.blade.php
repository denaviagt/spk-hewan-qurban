@extends('master')

@section('title', 'Kriteria')

@section('content')

    <div class="content-wrapper">

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
                                <tr>
                                    <td class="py-1">
                                        1
                                    </td>
                                    <td>
                                        C1
                                    </td>
                                    <td>
                                        Umur
                                    </td>
                                    <td>
                                        Benefit
                                    </td>
                                    <td>
                                        Tahun
                                    </td>
                                    <td>
                                        20%
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
