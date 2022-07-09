@extends('master')

@section('title', 'From Tambah Data Hewan')

@section('content')

    <div class="content-wrapper">

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Tambah Data Hewan</h4>
                    <p class="card-description">
                        Isikan Data Berikut dengan Benar!
                    </p>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="nama_hewan">Nama Hewan</label>
                            <input type="text" class="form-control" id="nama_hewan" name="nama_hewan" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="tipe_hewan">Tipe Hewan</label>
                            <select class="form-control" id="tipe_hewan">
                                <option>Sapi</option>
                                <option>Kambing</option>
                                <option>Domba</option>
                                <option>Unta</option>
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
                            <select class="form-control" id="warna">
                                <option>Putih</option>
                                <option>Coklat</option>
                                <option>Abu</option>
                                <option>Hitam</option>
                                <option>Warna Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jkel">Jenis Kelamin</label>
                            <select class="form-control" id="jkel">
                                <option>Jantan</option>
                                <option>Betina</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jkel">Bebas PMK</label>
                            <select class="form-control" id="jkel">
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
