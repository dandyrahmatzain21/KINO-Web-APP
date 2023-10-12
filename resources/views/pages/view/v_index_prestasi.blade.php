@extends('layouts/app')
@section('judul_halaman', 'Index-Prestasi-'.$Periode->periode)

@section('konten')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">Tabel Index Prestasi {{$Periode->periode}}</h6>
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
                                        Total Nilai</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Index Prestasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($IndexPrestasi as $data)
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ $data->id_karyawan }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ $data->nama_karyawan }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ $data->n_total }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">
                                                @if ($data->n_total >= 67)
                                                    Kinerja Sangat Baik
                                                @elseif ($data->n_total >= 54)
                                                    Kinerja Baik
                                                @elseif ($data->n_total >= 41)
                                                    Kinerja Cukup Baik
                                                @elseif ($data->n_total >= 28)
                                                    Kinerja Buruk
                                                @elseif ($data->n_total >= 15)
                                                    Kinerja Sangat Buruk
                                                @endif
                                            </p>
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
