@extends('layouts/app')
@section('judul_halaman', 'Hasil-Penilaian-'.$Periode->periode)

@section('konten')
    <div class="row">
        <div class="col-md-4 mt-md-0 mt-4 mb-4">
            <div class="card">
                <div class="card-header mx-4 p-3 text-center">
                    <div class="icon icon-shape icon-lg bg-gradient-warning shadow text-center border-radius-lg">
                        <i class="fa-solid fa-check opacity-10"></i>
                    </div>
                </div>
                <div class="card-body pt-0 p-3 text-center">
                    <h6 class="text-center mb-0">Matriks Keputusan Terbormalisasi</h6>
                    <span class="text-xs">
                        Matriks Keputusan Ternormalisasi Sudah Selesai Dihitung
                    </span>
                    <hr class="horizontal dark my-3">
                    <a href="/Hasil-Penilaian/{{$HasilPenilaian->periode}}/Matriks-Keputusan" class="btn bg-gradient-warning mb-0">Lihat</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mt-md-0 mt-4 mb-4">
            <div class="card">
                <div class="card-header mx-4 p-3 text-center">
                    <div class="icon icon-shape icon-lg bg-gradient-warning shadow text-center border-radius-lg">
                        <i class="fa-solid fa-check opacity-10"></i>
                    </div>
                </div>
                <div class="card-body pt-0 p-3 text-center">
                    <h6 class="text-center mb-0">Matriks Keputusan Ternormalisasi & Terbobot</h6>
                    <span class="text-xs">
                        Matriks Keputusan Ternormalisasi & Terbobot Sudah Selesai Dihitung
                    </span>
                    <hr class="horizontal dark my-3">
                    <a href="/Hasil-Penilaian/{{$HasilPenilaian->periode}}/Matriks-Terbobot" class="btn bg-gradient-warning mb-0">Lihat</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mt-md-0 mt-4 mb-4">
            <div class="card">
                <div class="card-header mx-4 p-3 text-center">
                    <div class="icon icon-shape icon-lg bg-gradient-warning shadow text-center border-radius-lg">
                        <i class="fa-solid fa-check opacity-10"></i>
                    </div>
                </div>
                <div class="card-body pt-0 p-3 text-center">
                    <h6 class="text-center mb-0">Solusi Ideal Positif & Negatif</h6>
                    <span class="text-xs">
                        Solusi Ideal Positif & Negatif Sudah Selesai Dihitung
                    </span>
                    <hr class="horizontal dark my-3">
                    <a href="/Hasil-Penilaian/{{$HasilPenilaian->periode}}/Solusi-Ideal" class="btn bg-gradient-warning mb-0">Lihat</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mt-md-0 mt-4 mb-4">
            <div class="card">
                <div class="card-header mx-4 p-3 text-center">
                    <div class="icon icon-shape icon-lg bg-gradient-warning shadow text-center border-radius-lg">
                        <i class="fa-solid fa-check opacity-10"></i>
                    </div>
                </div>
                <div class="card-body pt-0 p-3 text-center">
                    <h6 class="text-center mb-0">Jarak Solusi Ideal Positif & Negatif</h6>
                    <span class="text-xs">
                        Jarak Solusi Ideal Positif & Negatif Sudah Selesai Dihitung
                    </span>
                    <hr class="horizontal dark my-3">
                    <a href="/Hasil-Penilaian/{{$HasilPenilaian->periode}}/Jarak-Solusi-Ideal" class="btn bg-gradient-warning mb-0">Lihat</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mt-md-0 mt-4 mb-4">
            <div class="card">
                <div class="card-header mx-4 p-3 text-center">
                    <div class="icon icon-shape icon-lg bg-gradient-warning shadow text-center border-radius-lg">
                        <i class="fa-solid fa-check opacity-10"></i>
                    </div>
                </div>
                <div class="card-body pt-0 p-3 text-center">
                    <h6 class="text-center mb-0">Nilai Preferensi</h6>
                    <span class="text-xs">
                        Nilai Preferensi Sudah Selesai Dihitung
                    </span>
                    <hr class="horizontal dark my-3">
                    <a href="/Hasil-Penilaian/{{$HasilPenilaian->periode}}/Nilai-Preferensi" class="btn bg-gradient-warning mb-0">Lihat</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mt-md-0 mt-4 mb-4">
            <div class="card">
                <div class="card-header mx-4 p-3 text-center">
                    <div class="icon icon-shape icon-lg bg-gradient-warning shadow text-center border-radius-lg">
                        <i class="fa-solid fa-check opacity-10"></i>
                    </div>
                </div>
                <div class="card-body pt-0 p-3 text-center">
                    <h6 class="text-center mb-0">Index Prestasi</h6>
                    <span class="text-xs">
                        Index Prestasi Sudah Selesai Dihitung
                    </span>
                    <hr class="horizontal dark my-3">
                    <a href="/Hasil-Penilaian/{{$HasilPenilaian->periode}}/Index-Prestasi" class="btn bg-gradient-warning mb-0">Lihat</a>
                </div>
            </div>
        </div>
    </div>
@endsection
