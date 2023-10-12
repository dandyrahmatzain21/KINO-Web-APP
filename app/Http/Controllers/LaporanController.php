<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class LaporanController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
        $this->LaporanModel = new LaporanModel();
    }

    public function IndexLaporan(){
        return view('pages/view/v_laporan');
    }

    public function LaporanHR(){
        $data = [
            'LaporanHR' => $this->LaporanModel->LaporanHR(),
        ];
        return view('pages/laporan/l_hr',$data);
    }

    public function LaporanKaryawan(){
        $data = [
            'LaporanKaryawan' => $this->LaporanModel->LaporanKaryawan(),
        ];
        return view('pages/laporan/l_karyawan',$data);
    }

    public function LaporanHasilPenilaian($periodebln,$periodethn)
    {
        $periode = $periodebln.'-'.$periodethn;
        $data = [
            'LaporanHasilPenilaian' => $this->LaporanModel->LaporanHasilPenilaian($periode),
            'Periode' => $this->LaporanModel->Periode($periode),
        ];
        return view('pages/laporan/l_hasil_penilaian',$data);
    }
}
