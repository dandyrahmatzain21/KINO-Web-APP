@extends('layouts/app')
@section('judul_halaman', 'Kriteria')

@section('konten')
    @if (auth()->user()->level == 1)
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0">Tabel Kriteria</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Kode Kriteria</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Kategori Kriteria</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Kriteria</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Jenis</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Bobot (%)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ViewKriteria as $data)
                                        <tr>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">{{ $data->kode_kriteria }}</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">{{ $data->kategori_kriteria }}</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">{{ $data->nama_kriteria }}</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">{{ $data->jenis }}</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">{{ $data->bobot }}</p>
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
                            <h6 class="mb-0">Tabel Kriteria</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Kode Kriteria</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Kategori Kriteria</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Kriteria</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Jenis</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Bobot (%)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ViewKriteria as $data)
                                        <tr>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">{{ $data->kode_kriteria }}</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">{{ $data->kategori_kriteria }}</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">{{ $data->nama_kriteria }}</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">{{ $data->jenis }}</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">{{ $data->bobot }}</p>
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
@endsection
