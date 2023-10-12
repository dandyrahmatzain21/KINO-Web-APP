@foreach ($ViewDivisi as $data)
    <div class="modal fade" id="EditData{{ $data->id_divisi }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <?php

                $EditDivisi = DB::table('t_divisi')
                    ->where('id_divisi', $data->id_divisi)
                    ->first();
                ?>

                <form method="POST" action="/Divisi/Update/{{ $EditDivisi->id_divisi }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input name="id_divisi" id="id_divisi" type="hidden" value="{{ $EditDivisi->id_divisi }}">

                        <!-- Nama Divisi -->
                        <div class="form-group">
                            <label for="nama_divisi" class="form-control-label">Nama Divisi</label>
                            <input name="nama_divisi" id="nama_divisi"
                                class="form-control @error('nama_divisi') is-invalid @enderror" type="text"
                                value="{{ $EditDivisi->nama_divisi }}">
                            <div class="invalid-feedback">
                                @error('nama_divisi')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <!---->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                        <button class="btn bg-gradient-warning">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endforeach
