<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AddModel extends Model
{
    use HasFactory;

    //HRAdd
    public function HRAdd($data)
    {
        DB::table('users')->insert($data);
    }
    //

    //HRAdd
    public function HRAdd2($data)
    {
        DB::table('t_human_resource')->insert($data);
    }
    //

    //KaryawanAdd
    public function KaryawanAdd($data)
    {
        DB::table('t_karyawan')->insert($data);
    }
    //

    //DivisiAdd
    public function DivisiAdd($data)
    {
        DB::table('t_divisi')->insert($data);
    }
    //

    //DivisiAdd
    public function PeriodeAdd($dataperiode)
    {
        DB::table('t_periode')->insert($dataperiode);
    }
    //

    //DivisiAdd
    public function PenilaianAdd($datapenilaian)
    {
        DB::table('t_penilaian')->insert($datapenilaian);
    }
    //

    //DivisiAdd
    public function NilaiPreferensiAdd($data_nilai_preferensi)
    {
        DB::table('t_nilai_preferensi')->insert($data_nilai_preferensi);
    }
    //

    //DivisiAdd
    public function IndexPrestasiAdd($data_index_prestasi)
    {
        DB::table('t_index_prestasi')->insert($data_index_prestasi);
    }
    //
}
