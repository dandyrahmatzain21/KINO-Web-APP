<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DeleteModel extends Model
{
    use HasFactory;

    //HRDelete
    public function HRDelete($id_hr)
    {
        DB::table('users')->where('id',$id_hr)->delete();
    }
    //

    //HRDelete
    public function HRDelete2($id_hr)
    {
        DB::table('t_human_resource')->where('id_hr',$id_hr)->delete();
    }
    //

    //KaryawanDelete
    public function KaryawanDelete($id_karyawan)
    {
        DB::table('t_karyawan')->where('id_karyawan',$id_karyawan)->delete();
    }
    //

    //DivisiDelete
    public function DivisiDelete($id_divisi)
    {
        DB::table('t_divisi')->where('id_divisi',$id_divisi)->delete();
    }
    //
}
