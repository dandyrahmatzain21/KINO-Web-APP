<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ViewModel;
use App\Models\EditModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class EditController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->ViewModel = new ViewModel();
        $this->EditModel = new EditModel();
    }

    //HRUpdate
    public function HRUpdate($id_hr)
    {
        Request()->validate([
            'name'              => 'required','string','max:255',
            'email'             => 'required', 'string', 'email', 'max:255', 'unique:users',
        ],[
            'name.required'     => 'Wajib Diisi',
            'email.required'    => 'Wajib Diisi',
        ]);

        $data = [
            'id'                => Request()->id_hr,
            'name'              => Request()->name,
            'email'             => Request()->email,
            'password'          => Hash::make(Request()->password),
        ];

        // Request()->validate([
        //     'pendidikan_akhir'  => 'required',
        //     'jenis_kelamin'     => 'required',
        // ],[
        //     'name.required'     => 'Wajib Diisi',
        //     'email.required'    => 'Wajib Diisi',
        // ]);

        // $data2 = [
        //     'id_hr'             => Request()->id_hr,
        //     'pendidikan_akhir'  => Request()->pendidikan_akhir,
        //     'jenis_kelamin'     => Request()->jenis_kelamin,
        // ];
        $this->EditModel->UpdateHR($id_hr,$data);
        // $this->EditModel->UpdateHR2($id_hr,$data2);
        return redirect()->route('HR')->with('Pesan','Data Berhasil Di Update');
    }

    public function KaryawanUpdate($id_karyawan)
    {
        Request()->validate([
            'nama_karyawan'             => 'required',
            'id_divisi'                 => 'required',
            'pendidikan_akhir'          => 'required',
            'jenis_kelamin'             => 'required',
            'status'                    => 'required',
        ],[
            'nama_karyawan.required'    => 'Wajib Diisi',
            'id_divisi.required'        => 'Wajib Diisi',
            'pendidikan_akhir.required' => 'Wajib Diisi',
            'jenis_kelamin.required'    => 'Wajib Diisi',
            'status.required'           => 'Wajib Diisi',
        ]);

        $data = [
            'id_karyawan'               => Request()->id_karyawan,
            'nama_karyawan'             => Request()->nama_karyawan,
            'id_divisi'                 => Request()->id_divisi,
            'pendidikan_akhir'          => Request()->pendidikan_akhir,
            'jenis_kelamin'             => Request()->jenis_kelamin,
            'status'                    => Request()->status,
        ];
        $this->EditModel->UpdateKaryawan($id_karyawan,$data);
        return redirect()->route('Karyawan')->with('Pesan','Data Berhasil Di Update');
    }

    public function DivisiUpdate($id_divisi)
    {
        $data = [
            'id_divisi'     => Request()->id_divisi,
            'nama_divisi'   => Request()->nama_divisi,
        ];
        $this->EditModel->UpdateDivisi($id_divisi,$data);
        return redirect()->route('Divisi')->with('Pesan','Data Berhasil Di Update');
    }

    public function KaryawanNilai($periode, $id_karyawan)
    {
        $data = [
            'EditPenilaian' => $this->EditModel->EditPenilaian($periode, $id_karyawan),
            'Divisi' => $this->ViewModel->ViewDivisi(),
        ];
        return view('pages/edit/nilai_karyawan',$data);
    }

    public function KaryawanPostNilai($periode, $id_karyawan)
    {
        Request()->validate([
            'n1'            => 'required',
            'n2'            => 'required',
            'n3'            => 'required',
            'n4'            => 'required',
            'n5'            => 'required',
            'n6'            => 'required',
            'n7'            => 'required',
            'n8'            => 'required',
            'n9'            => 'required',
            'n10'           => 'required',
            'n11'           => 'required',
            'n12'           => 'required',
            'n13'           => 'required',
            'n14'           => 'required',
            'n15'           => 'required',
        ],[
            'n1.required'   => '* Wajib Diisi',
            'n2.required'   => '* Wajib Diisi',
            'n3.required'   => '* Wajib Diisi',
            'n4.required'   => '* Wajib Diisi',
            'n5.required'   => '* Wajib Diisi',
            'n6.required'   => '* Wajib Diisi',
            'n7.required'   => '* Wajib Diisi',
            'n8.required'   => '* Wajib Diisi',
            'n9.required'   => '* Wajib Diisi',
            'n10.required'  => '* Wajib Diisi',
            'n11.required'  => '* Wajib Diisi',
            'n12.required'  => '* Wajib Diisi',
            'n13.required'  => '* Wajib Diisi',
            'n14.required'  => '* Wajib Diisi',
            'n15.required'  => '* Wajib Diisi',
        ]);

        $data = [
            'id_karyawan'   => Request()->id_karyawan,
            'nama_karyawan' => Request()->nama_karyawan,
            'id_divisi'     => Request()->id_divisi,
            'n1'            => Request()->n1,
            'n2'            => Request()->n2,
            'n3'            => Request()->n3,
            'n4'            => Request()->n4,
            'n5'            => Request()->n5,
            'n6'            => Request()->n6,
            'n7'            => Request()->n7,
            'n8'            => Request()->n8,
            'n9'            => Request()->n9,
            'n10'           => Request()->n10,
            'n11'           => Request()->n11,
            'n12'           => Request()->n12,
            'n13'           => Request()->n13,
            'n14'           => Request()->n14,
            'n15'           => Request()->n15,
        ];
        $this->EditModel->UpdateNilai($periode, $id_karyawan, $data);
        return redirect()->route('DaftarPenilaianKaryawan',$periode)->with('Pesan','Data Berhasil Di Update');
    }
    //
}
