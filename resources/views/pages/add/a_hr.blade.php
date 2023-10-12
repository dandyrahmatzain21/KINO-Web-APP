<div class="modal fade" id="AddData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <?php
            $Divisi = DB::table('t_divisi')->get();
            ?>

            <form method="POST" action="/HR/Insert" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="form-control-label">Nama Human Resource</label>
                        <input name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                            type="text" value="{{ old('name') }}">
                        <div class="invalid-feedback">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <!---->

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email" class="form-control-label">Email</label>
                        <input name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                            type="email" value="{{ old('email') }}">
                        <div class="invalid-feedback">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <!---->

                    <!-- Password -->
                    <div class="form-group">
                        <label for="password" class="form-control-label">Password</label>
                        <input name="password" id="password"
                            class="form-control @error('password') is-invalid @enderror" type="password"
                            value="{{ old('password') }}">
                        <div class="invalid-feedback">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <!---->

                    <!-- Pendidikan Akhir -->
                    <div class="form-group">
                        <label for="pendidikan_akhir" class="form-control-label">Pendidikan Akhir</label>
                        <select name="pendidikan_akhir" id="pendidikan_akhir"
                            class="form-control @error('pendidikan_akhir') is-invalid @enderror"
                            value="{{ old('pendidikan_akhir') }}">
                            <option value="">Pilih</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMK">SMK</option>
                            <option value="Diploma 1">Diploma 1</option>
                            <option value="Diploma 2">Diploma 2</option>
                            <option value="Diploma 3">Diploma 3</option>
                            <option value="Sarjana 1">Sarjana 1</option>
                            <option value="Sarjana 2">Sarjana 2</option>
                            <option value="Sarjana 3">Sarjana 3</option>
                        </select>
                        <div class="invalid-feedback">
                            @error('pendidikan_akhir')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <!---->

                    <!-- Jenis Kelamin -->
                    <div class="form-group">
                        <label for="jenis_kelamin" class="form-control-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin"
                            class="form-control @error('jenis_kelamin') is-invalid @enderror"
                            value="{{ old('jenis_kelamin') }}">
                            <option value="">Pilih</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <div class="invalid-feedback">
                            @error('jenis_kelamin')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                    <button class="btn bg-gradient-warning">Simpan</button>
                </div>
            </form>

        </div>
    </div>
</div>
