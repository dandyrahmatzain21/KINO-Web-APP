<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ViewModel;
use App\Models\EditModel;
use App\Models\DeleteModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class DeleteController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->ViewModel = new ViewModel();
        $this->EditModel = new EditModel();
        $this->DeleteModel = new DeleteModel();
    }

    public function HRDelete($id_hr)
    {
        $this->DeleteModel->HRDelete($id_hr);
        $this->DeleteModel->HRDelete2($id_hr);
        return redirect()->route('HR')->with('Pesan','Data Berhasil Di Hapus');
    }

    public function KaryawanDelete($id_karyawan)
    {
        $this->DeleteModel->KaryawanDelete($id_karyawan);
        return redirect()->route('Karyawan')->with('Pesan','Data Berhasil Di Hapus');
    }

    public function DivisiDelete($id_divisi)
    {
        $this->DeleteModel->DivisiDelete($id_divisi);
        return redirect()->route('Divisi')->with('Pesan','Data Berhasil Di Hapus');
    }
}
