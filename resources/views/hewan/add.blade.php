@extends('master')

@section('title', 'From Tambah Data Hewan')

@section('content')

    <div class="content-wrapper">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb border-0">
              <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
              <li class="breadcrumb-item active"><a href="{{ url('/hewan') }}">Daftar Hewan</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tambah data</li>
            </ol>
          </nav>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Tambah Data Hewan</h4>
                    <p class="card-description">
                        Isikan Data Berikut dengan Benar!
                    </p>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama_hewan">Nama Hewan</label>
                            <input type="text" class="form-control" id="nama_hewan" name="nama_hewan" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="tipe_hewan">Tipe Hewan</label>
                            <select class="form-control" id="tipe_hewan" name="tipe_hewan">
                                @foreach($animal_types as $animal_type)
                                <option value="{{$animal_type->id}}">{{ $animal_type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="image" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled=""
                                    placeholder="Upload Gambar">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="number" class="form-control" id="umur" name="umur"
                                placeholder="Umur Hewan">
                        </div>
                        <div class="form-group">
                            <label for="berat">Berat</label>
                            <input type="number" class="form-control" id="berat" name="berat"
                                placeholder="Berat Hewan">
                        </div>
                        <div class="form-group">
                            <label for="warna">Warna</label>
                            <select class="form-control" id="warna" name="warna">
                                <option>Putih</option>
                                <option>Coklat</option>
                                <option>Abu</option>
                                <option>Hitam</option>
                                <option>Warna Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jkel">Jenis Kelamin</label>
                            <select class="form-control" id="jkel" name="jkel">
                                <option>Jantan</option>
                                <option>Betina</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="free_pmk">Bebas PMK</label>
                            <select class="form-control" id="free_pmk" name="bebas_pmk">
                                <option>Ya</option>
                                <option>Tidak</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
