<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HomeModel extends Model
{
    use HasFactory;

    public function PeriodeAktif(){
        return $PeriodeAktif = DB::table('t_periode')->orderBy('id_periode','desc')->first();
    }

    public function JmlHR(){
        return $JmlHR = DB::table('t_human_resource')->count('id_hr');
    }

    public function JmlKaryawan(){
        return $JmlKaryawan = DB::table('t_karyawan')->count('id_karyawan');
    }

    public function JmlDivisi(){
        return DB::table('t_divisi')->count('id_divisi');
    }

    public function TotalKaryawanMasukPenilaian($id_periode){
        return DB::table('t_penilaian')->where('id_periode',$id_periode)->count('id_periode');
    }

    public function TotalKaryawanSudahDinilai($id_periode){
        return DB::table('t_penilaian')->where('id_periode',$id_periode)->where('n1','!=',null)->count('id_periode');
    }

    public function DataLineChart($hitung_offset){
        return DB::table('t_periode')->orderBy('id_periode','asc')->where('total_nilai_karyawan','!=',null)->offset($hitung_offset)->limit(8)->get();
    }

    public function DataPieChartSB($id_periode){
        return DB::table('t_index_prestasi')->where('id_periode',$id_periode)->where('index_prestasi','Kinerja Sangat Baik')->count('id_periode');
    }

    public function DataPieChartB($id_periode){
        return DB::table('t_index_prestasi')->where('id_periode',$id_periode)->where('index_prestasi','Kinerja Baik')->count('id_periode');
    }

    public function DataPieChartCB($id_periode){
        return DB::table('t_index_prestasi')->where('id_periode',$id_periode)->where('index_prestasi','Kinerja Cukup Baik')->count('id_periode');
    }

    public function DataPieChartBK($id_periode){
        return DB::table('t_index_prestasi')->where('id_periode',$id_periode)->where('index_prestasi','Kinerja Buruk')->count('id_periode');
    }

    public function DataPieChartSBK($id_periode){
        return DB::table('t_index_prestasi')->where('id_periode',$id_periode)->where('index_prestasi','Kinerja Sangat Buruk')->count('id_periode');
    }

    public function ViewTopNilaiPreferensi($periode){
        return DB::table('t_nilai_preferensi')
        ->join('t_periode','t_nilai_preferensi.id_periode','=','t_periode.id_periode')
        ->join('t_divisi','t_nilai_preferensi.id_divisi','=','t_divisi.id_divisi')
        ->where('periode',$periode)->orderBy('nilai_preferensi','desc')->limit(3)->get();
    }

    public function ViewBottomNilaiPreferensi($hitung_offset_bottom_rank,$periode){
        return DB::table('t_nilai_preferensi')
        ->join('t_periode','t_nilai_preferensi.id_periode','=','t_periode.id_periode')
        ->join('t_divisi','t_nilai_preferensi.id_divisi','=','t_divisi.id_divisi')
        ->where('periode',$periode)->orderBy('nilai_preferensi','desc')->offset($hitung_offset_bottom_rank)->limit(3)->get();
    }
}
