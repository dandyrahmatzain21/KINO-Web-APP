<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ViewModel extends Model
{
    use HasFactory;

    public function ViewHR(){
        return DB::table('t_human_resource')
        ->join('users','t_human_resource.id_hr','=','users.id')
        ->where('level',2)
        ->get();
    }

    public function ViewKaryawan(){
        return DB::table('t_karyawan')
        ->join('t_divisi','t_karyawan.id_divisi','=','t_divisi.id_divisi')
        ->get();
    }

    public function ViewKriteria(){
        return DB::table('t_kriteria')->get();
    }

    public function ViewAlternatif(){
        return DB::table('t_alternatif')->get();
    }

    public function ViewDivisi(){
        return DB::table('t_divisi')->get();
    }

    public function ViewPeriode(){
        return DB::table('t_periode')->orderby('id_periode','desc')->get();
    }

    public function ViewPenilaian($periode){
        return DB::table('t_penilaian')
        ->join('t_periode','t_penilaian.id_periode','=','t_periode.id_periode')
        ->join('t_divisi','t_penilaian.id_divisi','=','t_divisi.id_divisi')
        ->where('periode',$periode)->get();
    }

    public function ViewPeriodeDipilih($periode){
        return DB::table('t_penilaian')
        ->join('t_periode','t_penilaian.id_periode','=','t_periode.id_periode')
        ->where('periode',$periode)->first();
    }

    public function ViewHasilPenilaian($periode){
        return DB::table('t_penilaian')
        ->join('t_periode','t_penilaian.id_periode','=','t_periode.id_periode')
        ->where('periode',$periode)->first();
    }

    public function ViewNilaiPreferensi($periode){
        return DB::table('t_nilai_preferensi')
        ->join('t_periode','t_nilai_preferensi.id_periode','=','t_periode.id_periode')
        ->where('periode',$periode)->orderBy('nilai_preferensi','desc')->get();
    }
}
