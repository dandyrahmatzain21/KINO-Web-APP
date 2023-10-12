@foreach ($Karyawan as $data)
    <div class="modal fade" id="DetailNilai{{ $data->id_karyawan }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Nilai</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>Informasi Karyawan</h6>
                    <div class="row">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Id Karyawan</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Divisi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ $data->id_karyawan }}
                                        </p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ $data->nama_karyawan }}
                                        </p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ $data->nama_divisi }}
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr class="horizontal dark">
                    <h6>Individual</h6>
                    <div class="row">
                        <div class="col-md-2">
                            <p>CI-1</p>
                        </div>
                        <div class="col-md-2">
                            <p>{{ $data->n1 }}</p>
                        </div>
                        <div class="col-md-2">
                            <p>CI-2</p>
                        </div>
                        <div class="col-md-2">
                            <p>{{ $data->n2 }}</p>
                        </div>
                        <div class="col-md-2">
                            <p>CI-3</p>
                        </div>
                        <div class="col-md-2">
                            <p>{{ $data->n3 }}</p>
                        </div>
                        <div class="col-md-2">
                            <p>CI-4</p>
                        </div>
                        <div class="col-md-2">
                            <p>{{ $data->n4 }}</p>
                        </div>
                        <div class="col-md-2">
                            <p>CI-5</p>
                        </div>
                        <div class="col-md-2">
                            <p>{{ $data->n5 }}</p>
                        </div>
                    </div>
                    <hr class="horizontal dark">
                    <h6>Sikap Kerja</h6>
                    <div class="row">
                        <div class="col-md-2">
                            <p>CK-1</p>
                        </div>
                        <div class="col-md-2">
                            <p>{{ $data->n6 }}</p>
                        </div>
                        <div class="col-md-2">
                            <p>CK-2</p>
                        </div>
                        <div class="col-md-2">
                            <p>{{ $data->n7 }}</p>
                        </div>
                        <div class="col-md-2">
                            <p>CK-3</p>
                        </div>
                        <div class="col-md-2">
                            <p>{{ $data->n8 }}</p>
                        </div>
                        <div class="col-md-2">
                            <p>CK-4</p>
                        </div>
                        <div class="col-md-2">
                            <p>{{ $data->n9 }}</p>
                        </div>
                        <div class="col-md-2">
                            <p>CK-5</p>
                        </div>
                        <div class="col-md-2">
                            <p>{{ $data->n10 }}</p>
                        </div>
                        <div class="col-md-2">
                            <p>CK-6</p>
                        </div>
                        <div class="col-md-2">
                            <p>{{ $data->n11 }}</p>
                        </div>
                        <div class="col-md-2">
                            <p>CK-7</p>
                        </div>
                        <div class="col-md-2">
                            <p>{{ $data->n12 }}</p>
                        </div>
                    </div>
                    <hr class="horizontal dark">
                    <h6>Knowledge</h6>
                    <div class="row">
                        <div class="col-md-2">
                            <p>CN-1</p>
                        </div>
                        <div class="col-md-2">
                            <p>{{ $data->n13 }}</p>
                        </div>
                        <div class="col-md-2">
                            <p>CN-2</p>
                        </div>
                        <div class="col-md-2">
                            <p>{{ $data->n14 }}</p>
                        </div>
                        <div class="col-md-2">
                            <p>CN-3</p>
                        </div>
                        <div class="col-md-2">
                            <p>{{ $data->n15 }}</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
