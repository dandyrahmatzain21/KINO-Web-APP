<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LaporanModel extends Model
{
    use HasFactory;

    public function LaporanHR(){
        return DB::table('t_human_resource')
        ->join('users','t_human_resource.id_hr','=','users.id')
        ->where('level',2)
        ->get();
    }

    public function LaporanKaryawan(){
        return DB::table('t_karyawan')
        ->join('t_divisi','t_karyawan.id_divisi','=','t_divisi.id_divisi')
        ->get();
    }

    public function LaporanHasilPenilaian($periode){
        return DB::table('t_nilai_preferensi')
        ->join('t_periode','t_nilai_preferensi.id_periode','=','t_periode.id_periode')
        ->join('t_divisi','t_nilai_preferensi.id_divisi','=','t_divisi.id_divisi')
        ->where('periode',$periode)->get();
    }

    public function Periode($periode){
        return DB::table('t_periode')
        ->where('periode',$periode)->first();
    }
}
