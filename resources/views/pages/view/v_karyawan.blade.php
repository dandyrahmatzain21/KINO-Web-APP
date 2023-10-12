@extends('layouts/app')
@section('judul_halaman', 'Karyawan')

@section('konten')
    @if (auth()->user()->level == 1)
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0">Tabel Karyawan</h6>
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
                                            Id Karyawan</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Divisi</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Pendidikan Akhir</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Jenis Kelamin</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ViewKaryawan as $data)
                                        <tr>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">{{ $data->id_karyawan }}</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">{{ $data->nama_karyawan }}</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">{{ $data->nama_divisi }}</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">{{ $data->pendidikan_akhir }}</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">{{ $data->jenis_kelamin }}</p>
                                            </td>
                                            <td class="ps-3">
                                                <button type="button"
                                                    class="btn btn-icon btn-2 bg-gradient-info px-3 mb-0"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#EditData{{ $data->id_karyawan }}"><i
                                                        class="fa-solid fa-pen"></i></button>
                                                <button type="button"
                                                    class="btn btn-icon btn-2 bg-gradient-danger px-3 mb-0"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#DeleteData{{ $data->id_karyawan }}">
                                                    <i class="fa-solid fa-trash"></i>
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
    @else
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0">Tabel Karyawan</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Id Karyawan</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Divisi</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Pendidikan Akhir</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Jenis Kelamin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ViewKaryawan as $data)
                                        <tr>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">{{ $data->id_karyawan }}</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">{{ $data->nama_karyawan }}</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">{{ $data->nama_divisi }}</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">{{ $data->pendidikan_akhir }}</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">{{ $data->jenis_kelamin }}</p>
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
    @endif
    @include('pages/edit/e_karyawan')
    @include('pages/add/a_karyawan')
    @include('pages/delete/d_karyawan')
@endsection
