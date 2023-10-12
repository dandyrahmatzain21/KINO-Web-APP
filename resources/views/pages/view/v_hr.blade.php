@extends('layouts/app')
@section('judul_halaman', 'Human-Resources')

@section('konten')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">Tabel Human Resource</h6>
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
                                        Id Human Resource</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Email</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Password</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ViewHR as $data)
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ $data->id_hr }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ $data->name }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ $data->email }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">********</p>
                                        </td>
                                        <td class="ps-3">
                                            <button type="button" class="btn btn-icon btn-2 bg-gradient-info px-3 mb-0"
                                                data-bs-toggle="modal" data-bs-target="#EditData{{ $data->id_hr }}"><i
                                                    class="fa-solid fa-pen"></i></button>
                                            <button type="button" class="btn btn-icon btn-2 bg-gradient-danger px-3 mb-0"
                                                data-bs-toggle="modal" data-bs-target="#DeleteData{{ $data->id_hr }}">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
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
    @include('pages/add/a_hr')
    @include('pages/edit/e_hr')
    @include('pages/delete/d_hr')
@endsection
