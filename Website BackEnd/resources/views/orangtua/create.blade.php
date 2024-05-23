@extends('layouts.main')

@section('container')

<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800">Buat Akun Orang Tua</h1>
    <p class="mb-4">Silahkan isi data dengan lengkap dan password yang kuat</p>

    <form class="user" method="post" action="{{ url('/orang-tua') }}">
        @csrf
        {{-- @method('PUT') --}}
        <div class="form-group column">
            <div class="col-sm-6 mb-3 mb-sm-3">
                <input type="text" class="form-control form-control-user" id="nama" name="nama"
                placeholder="Nama lengkap Ibu">
            </div>
            <div class="col-sm-6 mb-3 mb-sm-3">
                <input type="text" class="form-control form-control-user" id="email" name="email"
                placeholder="Email">
            </div>
            <div class="col-sm-6 mb-3 mb-sm-3">
                <input type="password" class="form-control form-control-user"
                id="password" name="password" placeholder="Password">
            </div>
            <div class="col-sm-6 mb-3 mb-sm-3">
                <input type="role" class="form-control form-control-user"
                id="role" name="role" placeholder="Peran">
            </div>
        </div>
    <div class="col-sm-6">
    <button type="submit" class="btn btn-primary btn-user btn-block" >
        Buat Akun
    </button>
</div>
</div>
</form>
@endsection
