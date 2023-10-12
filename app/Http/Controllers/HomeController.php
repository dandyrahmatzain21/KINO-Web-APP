<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->HomeModel = new HomeModel();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $periodeaktif = DB::table('t_periode')->orderBy('id_periode','desc')->first();
        if ($periodeaktif == !null) {
            $periode = $periodeaktif->periode;
            $id_periode = $periodeaktif->id_periode;
        }else{
            $periode = 0;
            $id_periode = 0;
        }
        $total_periode = DB::table('t_periode')->count('id_periode');
        $hitung_offset = $total_periode - 8;

        $total_karyawan = DB::table('t_nilai_preferensi')->where('id_periode',$id_periode)->count('id_np');
        $hitung_offset_bottom_rank = $total_karyawan - 3;

        $data = [
            'PeriodeAktif' => $this->HomeModel->PeriodeAktif(),
            'JmlHR' => $this->HomeModel->JmlHR(),
            'JmlKaryawan' => $this->HomeModel->JmlKaryawan(),
            'JmlDivisi' => $this->HomeModel->JmlDivisi(),
            'TotalKaryawanMasukPenilaian' => $this->HomeModel->TotalKaryawanMasukPenilaian($id_periode),
            'TotalKaryawanSudahDinilai' => $this->HomeModel->TotalKaryawanSudahDinilai($id_periode),
            'TopRank' => $this->HomeModel->ViewTopNilaiPreferensi($periode),
            'BottomRank' => $this->HomeModel->ViewBottomNilaiPreferensi($hitung_offset_bottom_rank,$periode),
            'DataLineChart' => $this->HomeModel->DataLineChart($hitung_offset),
            'DataPieChartSB' => $this->HomeModel->DataPieChartSB($id_periode),
            'DataPieChartB' => $this->HomeModel->DataPieChartB($id_periode),
            'DataPieChartCB' => $this->HomeModel->DataPieChartCB($id_periode),
            'DataPieChartBK' => $this->HomeModel->DataPieChartBK($id_periode),
            'DataPieChartSBK' => $this->HomeModel->DataPieChartSBK($id_periode),
        ];
        return view('home',$data);
    }
}
