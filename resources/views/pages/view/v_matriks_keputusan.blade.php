@extends('layouts/app')
@section('judul_halaman', 'Matriks-Keputusan-Ternormalisasi-'.$Periode->periode)

@section('konten')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">Tabel Keputusan Ternormalisasi {{$Periode->periode}}</h6>
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
                                        CI-1</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CI-2</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CI-3</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CI-4</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CI-5</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CK-1</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CK-2</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CK-3</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CK-4</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CK-5</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CK-6</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CK-7</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CN-1</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CN-2</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CN-3</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($MatriksKeputusan as $data)
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ $data->id_karyawan }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ $data->nama_karyawan }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ number_format($data->r_n1, 5) }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ number_format($data->r_n2, 5) }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ number_format($data->r_n3, 5) }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ number_format($data->r_n4, 5) }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ number_format($data->r_n5, 5) }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ number_format($data->r_n6, 5) }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ number_format($data->r_n7, 5) }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ number_format($data->r_n8, 5) }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ number_format($data->r_n9, 5) }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ number_format($data->r_n10, 5) }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ number_format($data->r_n11, 5) }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ number_format($data->r_n12, 5) }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ number_format($data->r_n13, 5) }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ number_format($data->r_n14, 5) }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ number_format($data->r_n15, 5) }}</p>
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
