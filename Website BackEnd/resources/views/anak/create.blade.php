@extends('layouts.main')

@section('container')

<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800">Tambah Data Anak</h1>
    <p class="mb-4">Silahkan isi data yang sesuai dengan lengkap</p>


<form class="user" method="post" action="{{ url('/data-anak') }}">
    @csrf
    <div class="form-group column">
        <div class="col-sm-6 mb-3 mb-sm-3">
            <input type="text" class="form-control form-control-user" id="nama" name="nama"
                placeholder="Nama Anak">
        </div>

        <div class="col-sm-6 mb-3 mb-sm-3">
            <input type="text" class="form-control form-control-user" id="usia" name="usia"
                placeholder="usia">
        </div>

        <div class="col-sm-6 mb-3 mb-sm-3">
            <input type="text" class="form-control form-control-user" id="tanggal_lahir" name="tanggal_lahir"
            placeholder="Tanggal lahir">
        </div>

        <div class="col-sm-6 mb-3 mb-sm-3">
            <input type="text" class="form-control form-control-user" id="jenis_kelamin" name="jenis_kelamin"
            placeholder="Jenis Kelamin">
        </div>

        <div class="col-sm-6 mb-3 mb-sm-3">
            <input type="text" class="form-control form-control-user" id="tinggi_badan" name="tinggi_badan"
            placeholder="Tinggi Badan">
        </div>

        <div class="col-sm-6 mb-3 mb-sm-3">
            <input type="text" class="form-control form-control-user" id="berat_badan" name="berat_badan"
            placeholder="Berat Badan">
        </div>

        <div class="col-sm-6 mb-3 mb-sm-3">
            {{-- <label for="exampleDataList" class="form-label">Datalist example</label> --}}
            <input type="text" class="form-control form-control-user" list="Dataortu" id="nama_ortu" name="nama_ortu" placeholder="Pilih Orang Tua...">
            <datalist id="Dataortu">
                @foreach ($data as $data)
                <option value="{{ $data->nama }}">{{ $data->id }}
                @endforeach
            </datalist>
            @error('Dataortu')
            <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>

        <div class="col-sm-6 mb-3 mb-sm-3">
            <input type="text" class="form-control form-control-user" id="nohp_ortu" name="nohp_ortu"
            placeholder="No hp Orang Tua/Wali">
        </div>

        <div class="col-sm-6">
            <input type="text" class="form-control form-control-user" id="alamat" name="alamat"
            placeholder="Alamat">
        </div>

        <div class="col-sm-6">
            <input type="text" list="" " class="form-control form-control-user" id="id_ortu" name="id_ortu"
            placeholder="id_ortu">
        </div>
    </div>
    <div class="col-sm-6">
        <button type="submit" class="btn btn-primary btn-user btn-block">
            Tambah Data
        </button>
    </div>
</form>
</div>
@endsection
