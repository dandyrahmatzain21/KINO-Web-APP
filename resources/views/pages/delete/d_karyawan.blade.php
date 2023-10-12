@foreach ($ViewKaryawan as $data)
    <div class="modal fade" id="DeleteData{{ $data->id_karyawan }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda Yakin Untuk Menghapus Data <strong>{{ $data->nama_karyawan }}</strong></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                    <a class="btn bg-gradient-danger" href="/Karyawan/Delete/{{ $data->id_karyawan }}">Hapus</i></a>
                </div>
            </div>
        </div>
    </div>
@endforeach
