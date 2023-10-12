<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EditModel extends Model
{
    use HasFactory;

    //UpdateHR
    public function UpdateHR($id_hr,$data)
    {
        DB::table('users')->where('id',$id_hr)->update($data);
    }
    //

    //UpdateHR2
    public function UpdateHR2($id_hr,$data2)
    {
        DB::table('t_human_resource')->where('id_hr',$id_hr)->update($data2);
    }
    //

    //UpdateHR
    public function UpdateKaryawan($id_karyawan,$data)
    {
        DB::table('t_karyawan')->where('id_karyawan',$id_karyawan)->update($data);
    }
    //

    //UpdateDivisi
    public function UpdateDivisi($id_divisi,$data)
    {
        DB::table('t_divisi')->where('id_divisi',$id_divisi)->update($data);
    }
    //

    //EditDivisi
    public function EditPenilaian($periode, $id_karyawan)
    {
        return DB::table('t_penilaian')
        ->join('t_periode','t_penilaian.id_periode','=','t_periode.id_periode')
        ->join('t_karyawan','t_penilaian.id_karyawan','=','t_karyawan.id_karyawan')
        ->join('t_divisi','t_penilaian.id_divisi','=','t_divisi.id_divisi')
        ->where('periode', $periode)->where('t_penilaian.id_karyawan', $id_karyawan)->first();
    }
    //

    //UpdateHR
    public function UpdateNilai($periode, $id_karyawan,$data)
    {
        DB::table('t_penilaian')
        ->join('t_periode','t_penilaian.id_periode','=','t_periode.id_periode')
        ->where('periode', $periode)->where('id_karyawan',$id_karyawan)->update($data);
    }

    public function SumTotalNilaiPeriode($sum_nilai_periode,$id_periode)
    {
        DB::table('t_periode')->where('id_periode', $id_periode)->update($sum_nilai_periode);
    }
    //
}
