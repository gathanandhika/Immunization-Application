@extends('layouts.main')

@section('container')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Anak</h1>
    <p class="mb-4">Data yang ditampilkan adalah data anak yang terdaftar</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Anak</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="dataTable_length">
                                <label> Lihat <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> Baris</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <form method="GET" action="{{ url('data-anak') }}" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-12 mw-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" name="keyword" value="{{ $keyword }}" class="form-control bg-light border-0 small" placeholder="Cari..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 134.333px;">N0</th>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 134.333px;">Nama</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 209.333px;">Usia</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 94.3333px;">Tanggal Lahir</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 38.3333px;">Jenis Kelamin</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.3333px;">Tinggi badan</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.3333px;">Berat Badan</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.3333px;">Nama Orang Ibu</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.3333px;">No Hp Orang tua</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.3333px;">Alamat</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.3333px;">edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($anaks as $anak)
                                    <tr class="odd">
                                        <td> {{ $loop->iteration }} </td>
                                        <td> {{ $anak->nama }} </td>
                                        <td> {{ $anak->usia }} </td>
                                        <td> {{ $anak->tanggal_lahir }} </td>
                                        <td> {{ $anak->jenis_kelamin }} </td>
                                        <td> {{ $anak->tinggi_badan }} </td>
                                        <td> {{ $anak->berat_badan }} </td>
                                        <td> {{ $anak->nama_orangtua }} </td>
                                        <td> {{ $anak->nohp_ortu }} </td>
                                        <td> {{ $anak->alamat }} </td>
                                        <td>
                                            <a href="/edit" class="btn btn-success btn-circle btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="col-sm-12 col-md-5">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                    {{ $anaks->links( ) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
