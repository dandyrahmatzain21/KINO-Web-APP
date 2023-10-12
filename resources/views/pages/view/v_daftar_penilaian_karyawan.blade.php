@extends('layouts/app')
@section('judul_halaman', 'Daftar-Penilaian-Karyawan-' . $Periode->periode)

@section('konten')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">Daftar Tabel Penilaian Karyawan Periode {{ $Periode->periode }}</h6>
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
                                        Status</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Karyawan as $data)
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
                                        <td class="ps-3">
                                            @if ($data->n1 == !null)
                                                <span class="badge badge-sm bg-gradient-warning">Sudah Dinilai</span>
                                            @else
                                                <span class="badge badge-sm bg-gradient-danger">Belum Dinilai</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->n1 == !null)
                                                <button type="button"
                                                    class="btn btn-icon btn-2 bg-gradient-success mb-0"
                                                    data-bs-toggle="modal" data-bs-target="#DetailNilai{{ $data->id_karyawan }}"><i
                                                        class="fa-solid fa-info"></i></button>
                                            @else
                                                <a class="btn btn-icon btn-2 bg-gradient-info px-3 mb-0"
                                                    href="/Periode/{{ $data->periode }}/Daftar-Penilaian-Karyawan/Karyawan/{{ $data->id_karyawan }}/Nilai"><i
                                                        class="fa-solid fa-pen"></i></a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <hr class="horizontal dark">
                    <div class="col-12 text-end p-3">
                        @if ($data->n1 == !null)
                            <a class="btn bg-gradient-warning mb-0" href="/Hasil-Penilaian/{{ $data->periode }}">Hitung
                                Normalisasi</a>
                        @else
                            <button class="btn bg-gradient-warning mb-0" disabled>Hitung
                                Normalisasi</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pages/view/v_detail_nilai')
@endsection
