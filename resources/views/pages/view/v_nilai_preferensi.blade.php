@extends('layouts/app')
@section('judul_halaman', 'Nilai-Preferensi-'.$Periode->periode)

@section('konten')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">Tabel Nilai Preferensi {{$Periode->periode}}</h6>
                        <!-- <button class="btn bg-gradient-warning btn-sm ms-auto" data-bs-toggle="modal"
                            data-bs-target="#AddData"><i class="fa-solid fa-plus"></i> Tambah Data</button> -->
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
                                        Nilai Preferensi</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Rank</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $Rank = 1; ?>
                                @foreach ($NilaiPreferensi as $data)
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ $data->id_karyawan }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ $data->nama_karyawan }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ number_format($data->nilai_preferensi, 5) }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm ps-3">{{ $Rank++ }}</p>
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
