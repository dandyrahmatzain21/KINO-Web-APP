<div class="modal fade" id="AddData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <?php $ViewKaryawan = DB::table('t_karyawan')->get(); ?>

            <form method="POST" action="/Periode/Insert" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="periode" class="form-control-label">Periode</label>
                        <div class="row">
                            <div class="col-md-6">
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
                                <div class="invalid-feedback">
                                    @error('periodebln')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
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
                                </select>
                                <div class="invalid-feedback">
                                    @error('periodethn')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    @foreach ($ViewKaryawan as $data)
                        <input type="hidden" id="id_karyawan[]" name="id_karyawan" value="{{ $data->id_karyawan }}">
                        <input type="hidden" id="nama_karyawan[]" name="nama_karyawan"
                            value="{{ $data->nama_karyawan }}">
                        <input type="hidden" id="id_divisi[]" name="id_divisi" value="{{ $data->id_divisi }}">
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                    <button class="btn bg-gradient-warning">Simpan</button>
                </div>
            </form>

        </div>
    </div>
</div>
