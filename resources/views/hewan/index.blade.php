@extends('master')

@section('title', 'Daftar Hewan')

@section('content')

    <div class="content-wrapper">

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
                                    <th>
                                        Umur
                                    </th>
                                    <th>
                                        Berat
                                    </th>
                                    <th>
                                        Warna
                                    </th>
                                    <th>
                                        Jenis Kelamin
                                    </th>
                                    <th>
                                        Bebas PMK
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-1">
                                        1
                                    </td>
                                    <td>
                                        Sapi 1
                                    </td>
                                    <td>
                                        Sapi
                                    </td>
                                    <td>
                                        <img src="{{ asset('assets/img/face.jpg') }}" alt="">
                                    </td>
                                    <td>
                                        3 Tahun
                                    </td>
                                    <td>
                                        100 Kg
                                    </td>
                                    <td>
                                        Putih
                                    </td>
                                    <td>
                                        Jantan
                                    </td>
                                    <td>
                                        <label class="badge badge-success">Ya</label>
                                    </td>
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
