@extends('layouts/app')
@section('judul_halaman', 'Periode')

@section('konten')
    @if (session('Pesan'))
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-end">
                <div style="position: fixed; top:10%; z-index:999;" class="alert alert-danger alert-dismissible fade show"
                    role="alert">
                    <span class="alert-icon text-white"><i class="fas fa-ban"></i></span>
                    <span class="alert-text text-white"><strong>Warning!</strong> {{ session('Pesan') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    @endif

    <div class="row">
        <div class="col-md-12 text-start mb-4">
            <div class="col-6 text-start">
                <button type="button" class="btn bg-gradient-warning mb-0" data-bs-toggle="modal"
                    data-bs-target="#AddData"><i class="fa-solid fa-plus"></i> Tambah Periode</button>
            </div>
        </div>
        <div class="row">
            @forelse ($ViewPeriode as $data)
                <?php $IsiNilai = DB::table('t_penilaian')
                    ->join('t_periode', 't_penilaian.id_periode', '=', 't_periode.id_periode')
                    ->join('t_karyawan', 't_penilaian.id_karyawan', '=', 't_karyawan.id_karyawan')
                    ->where('periode', $data->periode)
                    ->count('n1');
                $JmlKaryawan = DB::table('t_penilaian')
                    ->join('t_periode', 't_penilaian.id_periode', '=', 't_periode.id_periode')
                    ->join('t_karyawan', 't_penilaian.id_karyawan', '=', 't_karyawan.id_karyawan')
                    ->where('periode', $data->periode)
                    ->count('t_penilaian.id_karyawan'); ?>
                <div class="col-md-4 mt-md-0 mt-4 mb-4">
                    <div class="card">
                        <div class="card-header mx-4 p-3 text-center">
                            @if ($IsiNilai < $JmlKaryawan)
                                <div class="icon icon-shape icon-lg bg-gradient-danger shadow text-center border-radius-lg">
                                    <i class="fa-solid fa-remove opacity-10"></i>
                                </div>
                            @else
                                <div
                                    class="icon icon-shape icon-lg bg-gradient-warning shadow text-center border-radius-lg">
                                    <i class="fa-solid fa-check opacity-10"></i>
                                </div>
                            @endif
                        </div>
                        <div class="card-body pt-0 p-3 text-center">
                            <h6 class="text-center mb-0">{{ $data->periode }}</h6>
                            <span class="text-xs">
                                @if ($IsiNilai < $JmlKaryawan)
                                    Ada Karyawan Yang Belum Dinilai
                                @else
                                    Penilaian Di Periode Ini Sudah Selesai
                                @endif
                            </span>
                            <hr class="horizontal dark my-3">
                            @if ($IsiNilai < $JmlKaryawan)
                                <a href="/Periode/{{ $data->periode }}/Daftar-Penilaian-Karyawan"
                                    class="btn bg-gradient-primary mb-0">Nilai</a>
                            @else
                                <a href="/Periode/{{ $data->periode }}/Daftar-Penilaian-Karyawan"
                                    class="btn bg-gradient-warning mb-0">Lihat Hasil Penilaian</a>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
        @include('pages/add/a_periode')
    @endsection
