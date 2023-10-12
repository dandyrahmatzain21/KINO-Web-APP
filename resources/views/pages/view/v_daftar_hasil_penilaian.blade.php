@extends('layouts/app')
@section('judul_halaman', 'Hasil-Penilaian')

@section('konten')
    <div class="row">
        @forelse ($ViewPeriode as $data)
            <?php $IsiNilai = DB::table('t_penilaian')
                ->join('t_periode', 't_penilaian.id_periode', '=', 't_periode.id_periode')
                ->where('periode', $data->periode)
                ->count('n1');
            $JmlKaryawan = DB::table('t_penilaian')
                ->join('t_periode', 't_penilaian.id_periode', '=', 't_periode.id_periode')
                ->where('periode', $data->periode)
                ->count('t_penilaian.id_karyawan'); ?>
            <div class="col-md-4 mt-md-0 mt-4 mb-4">
                <div class="card">
                    <div class="card-header mx-4 p-3 text-center">
                        @if ($IsiNilai < $JmlKaryawan)
                            <div class="icon icon-shape icon-lg bg-gradient-danger shadow text-center border-radius-lg">
                                <i class="fa-solid fa-remove opacity-10"></i>
                            </div>
                        @elseif ($IsiNilai = $JmlKaryawan)
                            <div class="icon icon-shape icon-lg bg-gradient-warning shadow text-center border-radius-lg">
                                <i class="fa-solid fa-check opacity-10"></i>
                            </div>
                        @else
                            <div class="icon icon-shape icon-lg bg-gradient-danger shadow text-center border-radius-lg">
                                <i class="fa-solid fa-remove opacity-10"></i>
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
                            <span class="badge badge-sm bg-gradient-danger">Penilaian Belum Selesai Dilakukan</span>
                        @elseif ($IsiNilai = $JmlKaryawan)
                            <a href="/Hasil-Penilaian/{{ $data->periode }}" class="btn bg-gradient-warning mb-0">Lihat Hasil
                                Penilaian</a>
                        @else
                            <span class="badge badge-sm bg-gradient-danger">Penilaian Belum Selesai Dilakukan</span>
                        @endif
                    </div>
                </div>
            </div>
        @empty
        @endforelse
    </div>
@endsection
