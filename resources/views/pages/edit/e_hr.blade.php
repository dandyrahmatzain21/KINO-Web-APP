@foreach ($ViewHR as $data)
    <div class="modal fade" id="EditData{{ $data->id_hr }}" tabindex="-1" role="dialog"
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
                $EditHR = DB::table('t_human_resource')
                    ->join('users', 't_human_resource.id_hr', '=', 'users.id')
                    ->where('id_hr', $data->id_hr)
                    ->first();
                ?>

                <form method="POST" action="/HR/Update/{{ $EditHR->id_hr }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        {{-- Id Hr --}}
                        <input type="hidden" name="id_hr" id="id_hr" value="{{ $EditHR->id_hr }}">
                        {{--  --}}

                        <!-- Nama Kriteria -->
                        <div class="form-group">
                            <label for="name" class="form-control-label">Nama Human Resource</label>
                            <input name="name" id="name"
                                class="form-control @error('name') is-invalid @enderror" type="text"
                                value="{{ $EditHR->name }}">
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
                            <input name="email" id="email"
                                class="form-control @error('email') is-invalid @enderror" type="email"
                                value="{{ $EditHR->email }}">
                            <div class="invalid-feedback">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <!---->

                        <!-- Password -->
                        <div class="form-group">
                            <label for="password" class="form-control-label">Change Password</label>
                            <input name="password" id="password"
                                class="form-control @error('password') is-invalid @enderror" type="password"
                                value="">
                            <div class="invalid-feedback">
                                @error('password')
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
