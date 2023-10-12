@extends('layouts/app')
@section('judul_halaman', 'Divisi')

@section('konten')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">Tabel Divisi</h6>
                        <button class="btn bg-gradient-warning btn-sm ms-auto" data-bs-toggle="modal"
                            data-bs-target="#AddData"><i class="fa-solid fa-plus"></i> Tambah Data</button>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Id Divisi</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Divisi</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ViewDivisi as $data)
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ $data->id_divisi }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ $data->nama_divisi }}</p>
                                        </td>
                                        <td class="ps-3">
                                            <button type="button" class="btn btn-icon btn-2 bg-gradient-info px-3 mb-0"
                                                data-bs-toggle="modal" data-bs-target="#EditData{{ $data->id_divisi }}"><i
                                                    class="fa-solid fa-pen"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pages/add/a_divisi')
    @include('pages/edit/e_divisi')
    @include('pages/delete/d_divisi')
@endsection
