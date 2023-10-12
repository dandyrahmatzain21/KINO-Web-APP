@extends('layouts/app')
@section('judul_halaman', 'Jarak-Solusi-Ideal-'.$Periode->periode)

@section('konten')
    <div class="row">
        <div class="col-6">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">Tabel Jarak Solusi Ideal Positif (+) {{$Periode->periode}}</h6>
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
                                        Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($JarakSolusiIdeal as $data)
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ $data->id_karyawan }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ $data->nama_karyawan }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ number_format($data->a_total, 5) }}</p>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">Tabel Jarak Solusi Ideal Negatif (-) {{$Periode->periode}}</h6>
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
                                        Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($JarakSolusiIdeal as $data)
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ $data->id_karyawan }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ $data->nama_karyawan }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ number_format($data->b_total, 5) }}</p>
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
@endsection
