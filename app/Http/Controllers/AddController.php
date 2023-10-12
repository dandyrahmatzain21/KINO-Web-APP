<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddModel;
use App\Models\ViewModel;
use App\Models\EditModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class AddController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->AddModel = new AddModel();
        $this->ViewModel = new ViewModel();
        $this->EditModel = new EditModel();
    }

    public function HRInsert()
    {
        Request()->validate([
            'name'              => 'required','string','max:255',
            'email'             => 'required', 'string', 'email', 'max:255', 'unique:users',
            'password'          => 'required', 'string', 'min:8',
        ],[
            'name.required'     => 'Wajib Diisi',
            'email.required'    => 'Wajib Diisi',
            'password'          => 'Wajib Diisi',
        ]);

        $data = [
            'name'              => Request()->name,
            'email'             => Request()->email,
            'password'          => Hash::make(Request()->password),
        ];

        $data2 = [
            'pendidikan_akhir'  => Request()->pendidikan_akhir,
            'jenis_kelamin'     => Request()->jenis_kelamin,
        ];

        $this->AddModel->HRAdd($data);
        $this->AddModel->HRAdd2($data2);
        return redirect()->route('HR')->with('Pesan','Data Berhasil Di tambahkan');
    }

    public function KaryawanInsert()
    {
        Request()->validate([
            'nama_karyawan'             => 'required',
            'id_divisi'                 => 'required',
            'pendidikan_akhir'          => 'required',
            'jenis_kelamin'             => 'required',
        ],[
            'id_divisi.required'        => 'Wajib Diisi',
            'nama_karyawan.required'    => 'Wajib Diisi',
            'pendidikan_akhir.required' => 'Wajib Diisi',
            'jenis_kelamin.required'    => 'Wajib Diisi',
        ]);

        $data = [
            'nama_karyawan'             => Request()->nama_karyawan,
            'id_divisi'                 => Request()->id_divisi,
            'pendidikan_akhir'          => Request()->pendidikan_akhir,
            'jenis_kelamin'             => Request()->jenis_kelamin,
        ];
        $this->AddModel->KaryawanAdd($data);
        return redirect()->route('Karyawan')->with('Pesan','Data Berhasil Di tambahkan');
    }

    public function DivisiInsert()
    {
        Request()->validate([
            'nama_divisi'           => 'required|unique:t_divisi,nama_divisi',
        ],[
            'nama_divisi.unique'  => 'Divisi Sudah',
            'nama_divisi.required'  => 'Wajib Diisi',
        ]);

        $data = [
            'nama_divisi'           => Request()->nama_divisi,
        ];
        $this->AddModel->DivisiAdd($data);
        return redirect()->route('Divisi')->with('Pesan','Data Berhasil Di tambahkan');
    }

    public function PeriodeInsert(Request $request)
    {
        Request()->validate([
            'periodebln'           => 'required',
            'periodethn'           => 'required',
        ],[
            'periodebln.required'  => 'Wajib Diisi',
            'periodethn.required'  => 'Wajib Diisi',
        ]);

        $cek_id = DB::table('t_periode')->orderBy('id_periode','desc')->first();

        if($cek_id == null){
            $kode_id_periode = 50001;
        }else {
            $kode_id = $cek_id->id_periode + 1;
            $kode_id_periode = $kode_id;
        }

        $periode_input = Request()->periodebln.'-'.Request()->periodethn;
        $cek_periode = DB::table('t_periode')->where('periode',$periode_input)->first();
        if ($cek_periode == null) {
            $dataperiode = [
                'id_periode' => $kode_id_periode,
                'periode'    => Request()->periodebln.'-'.Request()->periodethn,
            ];
            $this->AddModel->PeriodeAdd($dataperiode);

            $datarequest = DB::table('t_karyawan')->get();
            foreach($datarequest as $item)
            {
                $datapenilaian = array(
                    'id_periode' => $kode_id_periode,
                    'id_karyawan'=> $item->id_karyawan,
                    'nama_karyawan'=> $item->nama_karyawan,
                    'id_divisi'=> $item->id_divisi,
                );
                $this->AddModel->PenilaianAdd($datapenilaian);
            }
            $pesan = '';
        }else{
            $pesan = 'Gagal Menambah, Periode Sudah Ada';
        }
        return redirect()->route('Periode')->with('Pesan',$pesan);
    }
}
