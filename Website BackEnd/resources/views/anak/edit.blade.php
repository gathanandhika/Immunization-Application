@extends('layouts.main')

@section('container')
    
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Buat Akun Orang Tua</h1>
</div>

<form class="user">
    <div class="form-group column">
        <div class="col-sm-6 mb-3 mb-sm-3">
            <input type="text" class="form-control form-control-user" id="nama_ibu"
                placeholder="Nama Anak">
        </div>

        <div class="col-sm-6 mb-3 mb-sm-3">
            <input type="text" class="form-control form-control-user" id="Email"
                placeholder="usia">
        </div>
   
        <div class="col-sm-6 mb-3 mb-sm-3">
            <input type="password" class="form-control form-control-user"
                id="password" placeholder="Tanggal lahir">
        </div>

        <div class="col-sm-6 mb-3 mb-sm-3">
            <input type="password" class="form-control form-control-user"
                id="repeatpassword" placeholder="Jenis Kelamin">
        </div>

        <div class="col-sm-6 mb-3 mb-sm-3">
            <input type="password" class="form-control form-control-user"
                id="repeatpassword" placeholder="Tinggi Badan">
        </div>

        <div class="col-sm-6 mb-3 mb-sm-3">
            <input type="password" class="form-control form-control-user"
                id="repeatpassword" placeholder="Berat Badan">
        </div>

        <div class="col-sm-6 mb-3 mb-sm-3">
            <input type="password" class="form-control form-control-user"
                id="repeatpassword" placeholder="Nama Orang Ibu">
        </div>

        <div class="col-sm-6 mb-3 mb-sm-3">
            <input type="password" class="form-control form-control-user"
                id="repeatpassword" placeholder="No hp Orang Tua/Wali">
        </div>

        <div class="col-sm-6">
            <input type="password" class="form-control form-control-user"
                id="repeatpassword" placeholder="Alamat">
        </div>
    </div>
    <a href="login.html" class="btn btn-primary btn-user btn-block">
        Tambah Data
    </a>
</form>
@endsection