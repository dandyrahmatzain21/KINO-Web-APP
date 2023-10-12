@extends('layouts.app')

@section('konten-dashboard')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    @if (session('Pesan'))
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-end">
                <div style="position: fixed; top:10%; z-index:999;" class="alert alert-danger alert-dismissible fade show"
                    role="alert">
                    <span class="alert-icon text-white"><i class="fas fa-ban"></i></span>
                    <span class="alert-text text-white"><strong>Warning!</strong> {{ session('Pesan') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    @endif

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Priode Aktif</p>
                                    <h5 class="font-weight-bolder">
                                        @if ($PeriodeAktif == null)
                                            Periode Tidak Ada
                                        @else
                                            {{ $PeriodeAktif->periode }}
                                        @endif
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-info shadow-info text-center rounded-circle">
                                    <i class="fa-solid fa-calendar-days mb-1 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Human Resource</p>
                                    <h5 class="font-weight-bolder">
                                        {{ $JmlHR }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                    <i class="fa-solid fa-user mb-1 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Karyawan Aktif</p>
                                    <h5 class="font-weight-bolder">
                                        {{ $JmlKaryawan }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                    <i class="fa-solid fa-users mb-1 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Divisi</p>
                                    <h5 class="font-weight-bolder">
                                        {{ $JmlDivisi }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                    <i class="fa-solid fa-briefcase mb-1 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-9">
                                <div class="numbers">
                                    @if ($PeriodeAktif == null)
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Karyawan Yang Dinilai
                                            Pada Periode -</p>
                                    @else
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Karyawan Yang Dinilai
                                            Pada Periode {{ $PeriodeAktif->periode }}</p>
                                    @endif
                                    <h5 class="font-weight-bolder">
                                        {{ $TotalKaryawanMasukPenilaian }} Karyawan
                                    </h5>
                                </div>
                            </div>
                            <div class="col-3 text-end">
                                <div class="icon icon-shape bg-gradient-secondary shadow-info text-center rounded-circle">
                                    <i class="fa-solid fa-briefcase mb-1 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-9">
                                <div class="numbers">
                                    @if ($PeriodeAktif == null)
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Karyawan Sudah Dinilai
                                            Pada Periode -</p>
                                    @else
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Karyawan Sudah Dinilai
                                            Pada Periode {{ $PeriodeAktif->periode }}</p>
                                    @endif
                                    <h5 class="font-weight-bolder">
                                        @if ($TotalKaryawanSudahDinilai == null)
                                            Penilaian Belum Dilakukan
                                        @elseif ($TotalKaryawanSudahDinilai == $TotalKaryawanMasukPenilaian)
                                            {{ $TotalKaryawanSudahDinilai }} / {{ $TotalKaryawanMasukPenilaian }} Penilaian
                                            Selesai Dilakukan
                                        @elseif ($TotalKaryawanSudahDinilai != null)
                                            {{ $TotalKaryawanSudahDinilai }} / {{ $TotalKaryawanMasukPenilaian }} Karyawan
                                            Sudah Dinilai
                                        @endif
                                    </h5>
                                </div>
                            </div>
                            <div class="col-3 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-success text-center rounded-circle">
                                    <i class="fa-solid fa-pen mb-1 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-8 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <div class="d-flex align-items-center">
                            <h6 class="text-capitalize mb-0">Trends Kinerja Karyawan</h6>
                            @if ($PeriodeAktif == null)
                                <a href="/" class="btn bg-gradient-warning btn-sm ms-auto"><i
                                        class="fa-solid fa-undo"></i> Refresh Chart</a>
                            @else
                                <a href="/Refresh-Chart/{{$PeriodeAktif->periode}}" class="btn bg-gradient-warning btn-sm ms-auto"><i
                                        class="fa-solid fa-undo"></i> Refresh Chart</a>
                            @endif
                        </div>
                        <p class="text-sm mb-0">
                            <span>Kinerja 8 Bulan Terakhir</span>
                        </p>
                    </div>
                    <div class="card-body p-3">
                        <div id="line-chart">
                            <script>
                                var options = {
                                    series: [{
                                        name: "Nilai Karyawan",
                                        data: [
                                            @foreach ($DataLineChart as $data)
                                                '{{ $data->total_nilai_karyawan }}',
                                            @endforeach
                                        ]
                                    }],
                                    chart: {
                                        height: 400,
                                        type: 'line',
                                        zoom: {
                                            enabled: false
                                        }
                                    },
                                    dataLabels: {
                                        enabled: false
                                    },
                                    stroke: {
                                        curve: 'straight'
                                    },
                                    grid: {},
                                    xaxis: {
                                        categories: [
                                            @foreach ($DataLineChart as $data)
                                                '{{ $data->periode }}',
                                            @endforeach
                                        ],
                                    },
                                    colors: ['#fd7e14']
                                };

                                var chart = new ApexCharts(document.querySelector("#line-chart"), options);
                                chart.render();
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <h6 class="text-capitalize">Pie Index Prestasi Karyawan Bulan Ini</h6>
                        <p class="text-sm mb-0">
                            <span class="">Index Berdasarkan 5 Kategori
                        </p>
                    </div>
                    <div class="card-body p-3">
                        <div id="pie-chart">
                            <script>
                                var options = {
                                    series: [
                                        {{ $DataPieChartSB }},
                                        {{ $DataPieChartB }},
                                        {{ $DataPieChartCB }},
                                        {{ $DataPieChartBK }},
                                        {{ $DataPieChartSBK }},
                                    ],
                                    chart: {
                                        width: 500,
                                        type: 'pie',
                                    },
                                    labels: ['Sangat Baik', 'Baik', 'Cukup Baik', 'Kurang Baik', 'Tidak Baik'],
                                    responsive: [{
                                        breakpoint: 380,
                                        options: {
                                            chart: {
                                                width: 200
                                            },
                                            legend: {
                                                position: 'bottom'
                                            }
                                        }
                                    }],
                                    colors: ['#2dce89', '#11cdef', '#6f42c1', '#fb6340', '#f5365c']
                                };

                                var chart = new ApexCharts(document.querySelector("#pie-chart"), options);
                                chart.render();
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0">Top 3 Rank Karyawan Bulan Ini</h6>
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
                                    <?php $rank = 1; ?>
                                    @foreach ($TopRank as $data)
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
                                                    {{ number_format($data->nilai_preferensi, 5) }}
                                                </p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">{{ $rank++ }}</p>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0">Bottom 3 Rank Karyawan Bulan Ini</h6>
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
                                    <?php
                                    $periodeaktif = DB::table('t_periode')
                                        ->orderBy('id_periode', 'desc')
                                        ->first();

                                    if ($periodeaktif == !null) {
                                        $id_periode = $periodeaktif->id_periode;
                                    } else {
                                        $id_periode = 0;
                                    }

                                    $total_karyawan = DB::table('t_nilai_preferensi')
                                        ->where('id_periode', $id_periode)
                                        ->count('id_np');

                                    if ($total_karyawan == !null) {
                                        $hitung_offset_bottom_rank = $total_karyawan - 2;
                                        $rank = $hitung_offset_bottom_rank;
                                    } else {
                                        $hitung_offset_bottom_rank = 0;
                                        $rank = 0;
                                    }
                                    ?>
                                    @foreach ($BottomRank as $data)
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
                                                    {{ number_format($data->nilai_preferensi, 5) }}
                                                </p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm ps-3">{{ $rank++ }}</p>
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
@endsection
