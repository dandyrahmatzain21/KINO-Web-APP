@extends('layouts/app')
@section('judul_halaman', 'Laporan')

@section('konten')
    @if (auth()->user()->level == 1)
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header mx-4 p-3 text-center">
                        <div class="icon icon-shape icon-lg bg-gradient-warning shadow text-center border-radius-lg">
                            <i class="fa-solid fa-user mb-1 opacity-10"></i>
                        </div>
                    </div>
                    <div class="card-body pt-0 p-3 text-center">
                        <h6 class="text-center mb-0">Laporan Human Resource</h6>
                        <span class="text-xs">Record human resource yang terdaftar</span>
                        <hr class="horizontal dark my-3">
                        <a href="/Laporan/Human-Resource" class="btn bg-gradient-warning mb-0" target="_blank">Print</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
                <div class="card">
                    <div class="card-header mx-4 p-3 text-center">
                        <div class="icon icon-shape icon-lg bg-gradient-warning shadow text-center border-radius-lg">
                            <i class="fa-solid fa-users mb-1 opacity-10"></i>
                        </div>
                    </div>
                    <div class="card-body pt-0 p-3 text-center">
                        <h6 class="text-center mb-0">Laporan Karyawan</h6>
                        <span class="text-xs">Record seluruh karyawan yang terdaftar</span>
                        <hr class="horizontal dark my-3">
                        <a href="/Laporan/Karyawan" class="btn bg-gradient-warning mb-0" target="_blank">Print</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
                <div class="card">
                    <div class="card-header mx-4 p-3 text-center">
                        <div class="icon icon-shape icon-lg bg-gradient-warning shadow text-center border-radius-lg">
                            <i class="fa-solid fa-book mb-1 opacity-10"></i>
                        </div>
                    </div>
                    <div class="card-body pt-0 p-3 text-center">
                        <h6 class="text-center mb-0">Laporan Hasil Penilaian</h6>
                        <span class="text-xs">Record seluruh hasil penilaian</span>
                        <hr class="horizontal dark my-3">
                        <button type="button" class="btn bg-gradient-warning mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">Print</button>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-4">
                <div class="card">
                    <div class="card-header mx-4 p-3 text-center">
                        <div class="icon icon-shape icon-lg bg-gradient-warning shadow text-center border-radius-lg">
                            <i class="fa-solid fa-users mb-1 opacity-10"></i>
                        </div>
                    </div>
                    <div class="card-body pt-0 p-3 text-center">
                        <h6 class="text-center mb-0">Laporan Karyawan</h6>
                        <span class="text-xs">Record seluruh karyawan yang terdaftar</span>
                        <hr class="horizontal dark my-3">
                        <a href="/Laporan/Karyawan" class="btn bg-gradient-warning mb-0" target="_blank">Print</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-md-0 mt-4">
                <div class="card">
                    <div class="card-header mx-4 p-3 text-center">
                        <div class="icon icon-shape icon-lg bg-gradient-warning shadow text-center border-radius-lg">
                            <i class="fa-solid fa-book mb-1 opacity-10"></i>
                        </div>
                    </div>
                    <div class="card-body pt-0 p-3 text-center">
                        <h6 class="text-center mb-0">Laporan Hasil Penilaian</h6>
                        <span class="text-xs">Record seluruh hasil penilaian</span>
                        <hr class="horizontal dark my-3">
                        <button type="button" class="btn bg-gradient-warning mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">Print</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- Modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Laporan Hasil Penilaian</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p>Silahkan Isi Periode</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tgl_awal_pembayaran">Bulan</label>
                                <select name="periodebln" id="periodebln"
                                    class="form-control @error('periodebln') is-invalid @enderror">
                                    <option value="">Pilih Bulan</option>
                                    <option value="Januari">Januari</option>
                                    <option value="Februari">Februari</option>
                                    <option value="Maret">Maret</option>
                                    <option value="April">April</option>
                                    <option value="Mei">Mei</option>
                                    <option value="Juni">Juni</option>
                                    <option value="Juli">Juli</option>
                                    <option value="Agustus">Agustus</option>
                                    <option value="September">September</option>
                                    <option value="Oktober">Oktober</option>
                                    <option value="November">November</option>
                                    <option value="Desember">Desember</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tgl_akhir_pembayaran">Tahun</label>
                                <select name="periodethn" id="periodethn"
                                    class="form-control @error('periodethn') is-invalid @enderror">
                                    <option value="">Pilih Tahun</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                    <option value="2031">2031</option>
                                    <option value="2032">2032</option>
                                    <option value="2033">2033</option>
                                    <div class="invalid-feedback">
                                        @error('periodethn')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                    <a href=""
                        onclick="this.href='/Laporan/Hasil-Penilaian/'+ document.getElementById('periodebln').value + '-' + document.getElementById('periodethn').value "
                        target="_blank" class="btn bg-gradient-warning">Print</a>
                </div>
            </div>
        </div>
    </div>
    {{-- End Modal --}}

@endsection
