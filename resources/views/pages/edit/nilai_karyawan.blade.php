@extends('layouts/app')
@section('judul_halaman', 'Edit-Karyawan')

@section('konten')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">Informasi Karyawan</h6>
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
                                        Pendidikan Akhir</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Jenis Kelamin</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ $EditPenilaian->id_karyawan }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ $EditPenilaian->nama_karyawan }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ $EditPenilaian->nama_divisi }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ $EditPenilaian->pendidikan_akhir }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ $EditPenilaian->jenis_kelamin }}</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">Nilai Karyawan</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form method="POST"
                            action="/Periode/{{ $EditPenilaian->periode }}/Daftar-Penilaian-Karyawan/Karyawan/{{ $EditPenilaian->id_karyawan }}/Nilai/Post-Nilai"
                            enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" id="id_karyawan" name="id_karyawan"
                                value="{{ $EditPenilaian->id_karyawan }}">
                            <input type="hidden" id="nama_karyawan" name="nama_karyawan"
                                value="{{ $EditPenilaian->nama_karyawan }}">
                            <input type="hidden" id="id_divisi" name="id_divisi" value="{{ $EditPenilaian->id_divisi }}">

                            <p class="text-uppercase text-sm">Kriteria Individu</p>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">CI-1 - Presensi &
                                        Kehadiran</label>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n1') is-invalid @enderror"
                                                    type="radio" name="n1" id="r1" value="5">
                                                <label class="form-check-label" for="r1">Tanpa keterangan
                                                    0</label>
                                                <div class="invalid-feedback">
                                                    @error('n1')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n1') is-invalid @enderror"
                                                    type="radio" name="n1" id="r2" value="4">
                                                <label class="form-check-label" for="r2">Tanpa keterangan
                                                    1</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n1') is-invalid @enderror"
                                                    type="radio" name="n1" id="r3" value="3">
                                                <label class="form-check-label" for="r3">Tanpa keterangan
                                                    2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n1') is-invalid @enderror"
                                                    type="radio" name="n1" id="r4" value="2">
                                                <label class="form-check-label" for="r4">Tanpa keterangan
                                                    3</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n1') is-invalid @enderror"
                                                    type="radio" name="n1" id="r5" value="1">
                                                <label class="form-check-label" for="r5">Tanpa keterangan >
                                                    3</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">CI-2 - Komunikasi</label>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n2') is-invalid @enderror"
                                                    type="radio" name="n2" id="r6" value="5">
                                                <label class="form-check-label" for="r6">Berbahasa sopan dan
                                                    tegas</label>
                                                <div class="invalid-feedback">
                                                    @error('n2')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n2') is-invalid @enderror"
                                                    type="radio" name="n2" id="r7" value="4">
                                                <label class="form-check-label" for="r7">Berbahasa sopan dan
                                                    Lancar</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n2') is-invalid @enderror"
                                                    type="radio" name="n2" id="r8" value="3">
                                                <label class="form-check-label" for="r8">Berbahasa sopan dan
                                                    malu</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n2') is-invalid @enderror"
                                                    type="radio" name="n2" id="r9" value="2">
                                                <label class="form-check-label" for="r9">Berbahasa tidak
                                                    sopan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n2') is-invalid @enderror"
                                                    type="radio" name="n2" id="r10" value="1">
                                                <label class="form-check-label" for="r10">Berbahasa tidak sopan
                                                    dan
                                                    kasar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">CI-3 - Karakter</label>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n3') is-invalid @enderror"
                                                    type="radio" name="n3" id="r11" value="5">
                                                <label class="form-check-label" for="r11">Khoeleris</label>
                                                <div class="invalid-feedback">
                                                    @error('n3')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n3') is-invalid @enderror"
                                                    type="radio" name="n3" id="r12" value="4">
                                                <label class="form-check-label" for="r12">Melankolis</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n3') is-invalid @enderror"
                                                    type="radio" name="n3" id="r13" value="3">
                                                <label class="form-check-label" for="r13">Phlegmatis</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n3') is-invalid @enderror"
                                                    type="radio" name="n3" id="r14" value="2">
                                                <label class="form-check-label" for="r14">Sanguinis</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n3') is-invalid @enderror"
                                                    type="radio" name="n3" id="r15" value="1">
                                                <label class="form-check-label" for="r15">Lainnya</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">CI-4 - Kebersihan</label>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n4') is-invalid @enderror"
                                                    type="radio" name="n4" id="r16" value="5">
                                                <label class="form-check-label" for="r16">Sangat bersih</label>
                                                <div class="invalid-feedback">
                                                    @error('n4')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n4') is-invalid @enderror"
                                                    type="radio" name="n4" id="r17" value="4">
                                                <label class="form-check-label" for="r17">Bersih</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n4') is-invalid @enderror"
                                                    type="radio" name="n4" id="r18" value="3">
                                                <label class="form-check-label" for="r18">Cukup bersih</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n4') is-invalid @enderror"
                                                    type="radio" name="n4" id="r19" value="2">
                                                <label class="form-check-label @error('n4') is-invalid @enderror"
                                                    for="r19">Kurang bersih</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n4') is-invalid @enderror"
                                                    type="radio" name="n4" id="r20" value="1">
                                                <label class="form-check-label" for="r20">Tidak bersih</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">CI-5 - Penampilan</label>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n5') is-invalid @enderror"
                                                    type="radio" name="n5" id="r21" value="5">
                                                <label class="form-check-label" for="r21">Sangat rapi</label>
                                                <div class="invalid-feedback">
                                                    @error('n5')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n5') is-invalid @enderror"
                                                    type="radio" name="n5" id="r22" value="4">
                                                <label class="form-check-label" for="r22">Rapi</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n5') is-invalid @enderror"
                                                    type="radio" name="n5" id="r23" value="3">
                                                <label class="form-check-label" for="r23">Cukup rapi</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n5') is-invalid @enderror"
                                                    type="radio" name="n5" id="r24" value="2">
                                                <label class="form-check-label" for="r24">Kurang rapi</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n5') is-invalid @enderror"
                                                    type="radio" name="n5" id="r25" value="1">
                                                <label class="form-check-label" for="r25">Tidak rapi</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">Kriteria Kinerja</p>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">CK-1 - Disiplin dan
                                        ketaatan
                                        terhadap aturan / SOP</label>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n6') is-invalid @enderror"
                                                    type="radio" name="n6" id="r26" value="5">
                                                <label class="form-check-label" for="r26">Sangat baik</label>
                                                <div class="invalid-feedback">
                                                    @error('n6')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n6') is-invalid @enderror"
                                                    type="radio" name="n6" id="r27" value="4">
                                                <label class="form-check-label" for="r27">Baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n6') is-invalid @enderror"
                                                    type="radio" name="n6" id="r28" value="3">
                                                <label class="form-check-label" for="r28">Cukup baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n6') is-invalid @enderror"
                                                    type="radio" name="n6" id="r29" value="2">
                                                <label class="form-check-label" for="r29">Kurang baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n6') is-invalid @enderror"
                                                    type="radio" name="n6" id="r30" value="1">
                                                <label class="form-check-label" for="r30">Tidak baik</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">CK-2 - Tanggung jawab
                                        peran</label>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n7') is-invalid @enderror"
                                                    type="radio" name="n7" id="r31" value="5">
                                                <label class="form-check-label" for="r31">Sangat baik</label>
                                                <div class="invalid-feedback">
                                                    @error('n7')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n7') is-invalid @enderror"
                                                    type="radio" name="n7" id="r32" value="4">
                                                <label class="form-check-label" for="r32">Baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n7') is-invalid @enderror"
                                                    type="radio" name="n7" id="r33" value="3">
                                                <label class="form-check-label" for="r33">Cukup baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n7') is-invalid @enderror"
                                                    type="radio" name="n7" id="r34" value="2">
                                                <label class="form-check-label" for="r34">Kurang baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n7') is-invalid @enderror"
                                                    type="radio" name="n7" id="r35" value="1">
                                                <label class="form-check-label" for="r35">Tidak baik</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">CK-3 - Ketepatan dan
                                        management
                                        waktu</label>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n8') is-invalid @enderror"
                                                    type="radio" name="n8" id="r36" value="5">
                                                <label class="form-check-label" for="r36">Sangat baik</label>
                                                <div class="invalid-feedback">
                                                    @error('n8')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n8') is-invalid @enderror"
                                                    type="radio" name="n8" id="r37" value="4">
                                                <label class="form-check-label" for="r37">Baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n8') is-invalid @enderror"
                                                    type="radio" name="n8" id="r38" value="3">
                                                <label class="form-check-label" for="r38">Cukup baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n8') is-invalid @enderror"
                                                    type="radio" name="n8" id="r39" value="2">
                                                <label class="form-check-label" for="r39">Kurang baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n8') is-invalid @enderror"
                                                    type="radio" name="n8" id="r40" value="1">
                                                <label class="form-check-label" for="r40">Tidak baik</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">CK-4 - Inisiatif dan
                                        keaktifan
                                        dalam bekerja</label>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n9') is-invalid @enderror"
                                                    type="radio" name="n9" id="r41" value="5">
                                                <label class="form-check-label" for="r41">Sangat baik</label>
                                                <div class="invalid-feedback">
                                                    @error('n9')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n9') is-invalid @enderror"
                                                    type="radio" name="n9" id="r42" value="4">
                                                <label class="form-check-label" for="r42">Baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n9') is-invalid @enderror"
                                                    type="radio" name="n9" id="r43" value="3">
                                                <label class="form-check-label" for="r43">Cukup baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n9') is-invalid @enderror"
                                                    type="radio" name="n9" id="r44" value="2">
                                                <label class="form-check-label" for="r44">Kurang baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n9') is-invalid @enderror"
                                                    type="radio" name="n9" id="r45" value="1">
                                                <label class="form-check-label" for="r45">Tidak baik</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">CK-5 - Teamwork dan
                                        harmonisasi
                                        dengan rekan kerja</label>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n10') is-invalid @enderror"
                                                    type="radio" name="n10" id="r46" value="5">
                                                <label class="form-check-label" for="r46">Sangat baik</label>
                                                <div class="invalid-feedback">
                                                    @error('n10')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n10') is-invalid @enderror"
                                                    type="radio" name="n10" id="r47" value="4">
                                                <label class="form-check-label" for="r47">Baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n10') is-invalid @enderror"
                                                    type="radio" name="n10" id="r48" value="3">
                                                <label class="form-check-label" for="r48">Cukup baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n10') is-invalid @enderror"
                                                    type="radio" name="n10" id="r49" value="2">
                                                <label class="form-check-label" for="r49">Kurang baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n10') is-invalid @enderror"
                                                    type="radio" name="n10" id="r50" value="1">
                                                <label class="form-check-label" for="r50">Tidak baik</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">CK-6 - Pemeliharaan
                                        kebersihan
                                        lingkungan kerja</label>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n11') is-invalid @enderror"
                                                    type="radio" name="n11" id="r51" value="5">
                                                <label class="form-check-label" for="r51">Sangat baik</label>
                                                <div class="invalid-feedback">
                                                    @error('n11')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n11') is-invalid @enderror"
                                                    type="radio" name="n11" id="r52" value="4">
                                                <label class="form-check-label" for="r52">Baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n11') is-invalid @enderror"
                                                    type="radio" name="n11" id="r53" value="3">
                                                <label class="form-check-label" for="r53">Cukup baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n11') is-invalid @enderror"
                                                    type="radio" name="n11" id="r54" value="2">
                                                <label class="form-check-label" for="r54">Kurang baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n11') is-invalid @enderror"
                                                    type="radio" name="n11" id="r55" value="1">
                                                <label class="form-check-label" for="r55">Tidak baik</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">CK-7 - Pengambilan
                                        keputusan
                                        dan pemecahan masalah</label>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n12') is-invalid @enderror"
                                                    type="radio" name="n12" id="r56" value="5">
                                                <label class="form-check-label" for="r56">Sangat baik</label>
                                                <div class="invalid-feedback">
                                                    @error('n12')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n12') is-invalid @enderror"
                                                    type="radio" name="n12" id="r57" value="4">
                                                <label class="form-check-label" for="r57">Baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n12') is-invalid @enderror"
                                                    type="radio" name="n12" id="r58" value="3">
                                                <label class="form-check-label" for="r58">Cukup baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n12') is-invalid @enderror"
                                                    type="radio" name="n12" id="r59" value="2">
                                                <label class="form-check-label" for="r59">Kurang baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n12') is-invalid @enderror"
                                                    type="radio" name="n12" id="r60" value="1">
                                                <label class="form-check-label" for="r60">Tidak baik</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">Kriteria Knowledge</p>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">CN-1 - Pengetahuan di
                                        bidang
                                        pekerjaan</label>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n13') is-invalid @enderror"
                                                    type="radio" name="n13" id="r61" value="5">
                                                <label class="form-check-label" for="r61">Sangat paham materi di
                                                    bidang pekerjaan</label>
                                                <div class="invalid-feedback">
                                                    @error('n13')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n13') is-invalid @enderror"
                                                    type="radio" name="n13" id="r62" value="4">
                                                <label class="form-check-label" for="r62">Paham materi di bidang
                                                    pekerjaan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n13') is-invalid @enderror"
                                                    type="radio" name="n13" id="r63" value="3">
                                                <label class="form-check-label" for="r63">Cukup paham materi di
                                                    bidang pekerjaan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n13') is-invalid @enderror"
                                                    type="radio" name="n13" id="r64" value="2">
                                                <label class="form-check-label" for="r64">Kurang paham materi di
                                                    bidang pekerjaan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n13') is-invalid @enderror"
                                                    type="radio" name="n13" id="r65" value="1">
                                                <label class="form-check-label" for="r65">Tidak paham materi di
                                                    bidang pekerjaan</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">CN-2 - Motivasi
                                        kerja</label>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n14') is-invalid @enderror"
                                                    type="radio" name="n14" id="r66" value="5">
                                                <label class="form-check-label" for="r66">Self-Actualization</label>
                                                <div class="invalid-feedback">
                                                    @error('n14')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n14') is-invalid @enderror"
                                                    type="radio" name="n14" id="r67" value="4">
                                                <label class="form-check-label" for="r67">Esteem
                                                    motivation</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n14') is-invalid @enderror"
                                                    type="radio" name="n14" id="r68" value="3">
                                                <label class="form-check-label" for="r68">Instrinsik
                                                    motivation</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n14') is-invalid @enderror"
                                                    type="radio" name="n14" id="r69" value="2">
                                                <label class="form-check-label" for="r69">Physiologycal
                                                    motivation</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n14') is-invalid @enderror"
                                                    type="radio" name="n14" id="r70" value="1">
                                                <label class="form-check-label" for="r70">Tidak memiliki
                                                    motivasi</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">CN-3 - Pemanfaatan
                                        alat</label>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n15') is-invalid @enderror"
                                                    type="radio" name="n15" id="r71" value="5">
                                                <label class="form-check-label" for="r71">Sangat mahir
                                                    menggunakan
                                                    alat di bidang pekerjaan</label>
                                                <div class="invalid-feedback">
                                                    @error('n15')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n15') is-invalid @enderror"
                                                    type="radio" name="n15" id="r72" value="4">
                                                <label class="form-check-label" for="r72">Mahir menggunakan alat
                                                    di
                                                    bidang pekerjaan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n15') is-invalid @enderror"
                                                    type="radio" name="n15" id="r73" value="3">
                                                <label class="form-check-label" for="r73">Cukup mahir menggunakan
                                                    alat di bidang pekerjaan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n15') is-invalid @enderror"
                                                    type="radio" name="n15" id="r74" value="2">
                                                <label class="form-check-label" for="r74">Kurang mahir
                                                    menggunakan
                                                    alat di bidang pekerjaan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input @error('n15') is-invalid @enderror"
                                                    type="radio" name="n15" id="r75" value="1">
                                                <label class="form-check-label" for="r75">Tidak mahir menggunakan
                                                    alat di bidang pekerjaan</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn bg-gradient-warning">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
