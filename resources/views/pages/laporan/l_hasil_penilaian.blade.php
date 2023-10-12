<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('template') }}/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('template') }}/assets/img/favicon.png">
    <title>Sistem Penilaian</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ asset('template') }}/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('template') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('template') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
    <link id="pagestyle" href="{{ asset('template') }}/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body onload="window.print();" class="g-sidenav-show bg-gray-100">
    <div class="main-content position-relative max-height-vh-100 h-100">
        <div class="card card-profile-top">
            <div class="card-body p-3">
                <div class="row gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="{{ asset('template') }}/assets/img/world.png" alt="profile_image"
                                class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                LAPORAN DATA HASIL PENILAIAN
                            </h5>
                            <p class="mb-0 font-weight-bold text-sm">
                                @if ($Periode == !null)
                                    Periode {{ $Periode->periode }}
                                @else
                                    Periode Tidak Ada
                                @endif
                            </p>
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
                                            Nilai Preferensi</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Rank</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $Rank = 1; ?>
                                    @foreach ($LaporanHasilPenilaian as $data)
                                        <tr>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">{{ $data->id_karyawan }}</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">{{ $data->nama_karyawan }}</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">{{ $data->nama_divisi }}</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">
                                                    {{ number_format($data->nilai_preferensi, 5) }}</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">{{ $Rank++ }}</p>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('template') }}/assets/js/core/popper.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/plugins/smooth-scrollbar.min.js"></script>
</body>

</html>
