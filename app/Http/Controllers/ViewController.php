<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ViewModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class ViewController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->ViewModel = new ViewModel();
    }

    //ViewHR
    public function IndexHR(){
        $data = [
            'ViewHR' => $this->ViewModel->ViewHR(),
        ];
        return view('pages/view/v_hr',$data);
    }

    //ViewKaryawan
    public function IndexKaryawan(){
        $data = [
            'ViewKaryawan' => $this->ViewModel->ViewKaryawan(),
        ];
        return view('pages/view/v_karyawan',$data);
    }

    //ViewKriteria
    public function IndexKriteria(){
        $data = [
            'ViewKriteria' => $this->ViewModel->ViewKriteria(),
        ];
        return view('pages/view/v_kriteria',$data);
    }

    //ViewDivisi
    public function IndexDivisi(){
        $data = [
            'ViewDivisi' => $this->ViewModel->ViewDivisi(),
        ];
        return view('pages/view/v_divisi',$data);
    }

    //ViewHasilPenilaian
    public function IndexHasilPenilaian(){
        $data = [
            'ViewPeriode' => $this->ViewModel->ViewPeriode(),
        ];
        return view('pages/view/v_daftar_hasil_penilaian',$data);
    }

    //ViewPeriode
    public function IndexPeriode(){
        $data = [
            'ViewPeriode' => $this->ViewModel->ViewPeriode(),
        ];
        return view('pages/view/v_periode',$data);
    }

    //IndexDaftarPenilaianKaryawan
    public function IndexDaftarPenilaianKaryawan($periode){
        $data = [
            'Karyawan' => $this->ViewModel->ViewPenilaian($periode),
            'Periode' => $this->ViewModel->ViewPeriodeDipilih($periode),
        ];
        return view('pages/view/v_daftar_penilaian_karyawan',$data);
    }

    //IndexDaftarPenilaianKaryawan
    public function HasilPenilaian($periode){
        $data = [
            'HasilPenilaian' => $this->ViewModel->ViewHasilPenilaian($periode),
            'Periode' => $this->ViewModel->ViewPeriodeDipilih($periode),
        ];
        return view('pages/view/v_hasil_penilaian',$data);
    }
}
