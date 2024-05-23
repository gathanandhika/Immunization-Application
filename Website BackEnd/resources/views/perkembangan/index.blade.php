@extends('layouts.main')

@section('container')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Anak</h1>
    <p class="mb-4">Data yang ditampilkan adalah data anak yang sudah terdaftar pada system dan dapat
        dipilih untuk mengisi perkembangan anak
    </p>

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
                            <p>Menampilkan {{ $data->count() }} Data dari {{ $all }}</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <form method="GET" action="{{ url('perkembangan') }}" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-12 mw-100 navbar-search">
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
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 209.333px;">Jenis Kelamin</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 209.333px;">Tanggal Lahir</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 209.333px;">Nama Ibu</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 209.333px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $anak)
                                <tr class="odd">
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $anak->nama }} </td>
                                    <td> {{ $anak->usia }} </td>
                                    <td> {{ $anak->jenis_kelamin }} </td>
                                    <td> {{ $anak->tanggal_lahir }} </td>
                                    <td> {{ $anak->nama_orangtua }} </td>
                                    <td>
                                        <a href="/update-kembang-anak" class="btn btn-success btn-circle btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                            {{ $data->links( ) }}
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
