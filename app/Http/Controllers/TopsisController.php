<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AllKaryawan;
use App\Models\AllKriteria;
use App\Models\ViewModel;
use App\Models\AddModel;
use App\Models\EditModel;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;

class TopsisController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->AddModel = new AddModel();
        $this->ViewModel = new ViewModel();
        $this->EditModel = new EditModel();
    }
    //
    public function GetLinguistik($periode)
    {
        # code...
        // $Karyawan = \App\Models\AllKaryawan::all();
        $Karyawan = DB::table('t_penilaian')
        ->join('t_periode','t_penilaian.id_periode','=','t_periode.id_periode')
        ->where('periode',$periode)->get();

        //n1
        foreach ($Karyawan as $Key) {
            # code...
            if (($Key->n1 == 1)) {
                # code...
                $Key->l_n1 = 1;
            }elseif (($Key->n1 == 2)) {
                # code...
                $Key->l_n1 = 2;
            }elseif (($Key->n1 == 3)) {
                # code...
                $Key->l_n1 = 3;
            }elseif (($Key->n1 == 4)) {
                # code...
                $Key->l_n1 = 4;
            }elseif (($Key->n1 == 5)) {
                # code...
                $Key->l_n1 = 5;
            }
        }

        //karya tulis ilmiah
        foreach ($Karyawan as $Key) {
            # code...
            if (($Key->n2 == 1)) {
                # code...
                $Key->l_n2 = 1;
            }elseif (($Key->n2 == 2)) {
                # code...
                $Key->l_n2 = 2;
            }elseif (($Key->n2 == 3)) {
                # code...
                $Key->l_n2 = 3;
            }elseif (($Key->n2 == 4)) {
                # code...
                $Key->l_n2 = 4;
            }elseif (($Key->n2 == 5)) {
                # code...
                $Key->l_n2 = 5;
            }
        }
        //bahasa asing
        foreach ($Karyawan as $Key) {
            # code...
            if (($Key->n3 == 1)) {
                # code...
                $Key->l_n3 = 1;
            }elseif (($Key->n3 == 2)) {
                # code...
                $Key->l_n3 = 2;
            }elseif (($Key->n3 == 3)) {
                # code...
                $Key->l_n3 = 3;
            }elseif (($Key->n3 == 4)) {
                # code...
                $Key->l_n3 = 4;
            }elseif (($Key->n3 == 5)) {
                # code...
                $Key->l_n3 = 5;
            }
        }

        //n4
        foreach ($Karyawan as $Key) {
            # code...
            if (($Key->n4 == 1)) {
                # code...
                $Key->l_n4 = 1;
            }elseif (($Key->n4 == 2)) {
                # code...
                $Key->l_n4 = 2;
            }elseif (($Key->n4 == 3)) {
                # code...
                $Key->l_n4 = 3;
            }elseif (($Key->n4 == 4)) {
                # code...
                $Key->l_n4 = 4;
            }elseif (($Key->n4 == 5)) {
                # code...
                $Key->l_n4 = 5;
            }
        }
        //n5
        foreach ($Karyawan as $Key) {
            # code...
            if (($Key->n5 == 1)) {
                # code...
                $Key->l_n5 = 1;
            }elseif (($Key->n5 == 2)) {
                # code...
                $Key->l_n5 = 2;
            }elseif (($Key->n5 == 3)) {
                # code...
                $Key->l_n5 = 3;
            }elseif (($Key->n5 == 4)) {
                # code...
                $Key->l_n5 = 4;
            }elseif (($Key->n5 == 5)) {
                # code...
                $Key->l_n5 = 5;
            }
        }

        foreach ($Karyawan as $Key) {
            # code...
            if (($Key->n6 == 1)) {
                # code...
                $Key->l_n6 = 1;
            }elseif (($Key->n6 == 2)) {
                # code...
                $Key->l_n6 = 2;
            }elseif (($Key->n6 == 3)) {
                # code...
                $Key->l_n6 = 3;
            }elseif (($Key->n6 == 4)) {
                # code...
                $Key->l_n6 = 4;
            }elseif (($Key->n6 == 5)) {
                # code...
                $Key->l_n6 = 5;
            }
        }

        foreach ($Karyawan as $Key) {
            # code...
            if (($Key->n7 == 1)) {
                # code...
                $Key->l_n7 = 1;
            }elseif (($Key->n7 == 2)) {
                # code...
                $Key->l_n7 = 2;
            }elseif (($Key->n7 == 3)) {
                # code...
                $Key->l_n7 = 3;
            }elseif (($Key->n7 == 4)) {
                # code...
                $Key->l_n7 = 4;
            }elseif (($Key->n7 == 5)) {
                # code...
                $Key->l_n7 = 5;
            }
        }

        foreach ($Karyawan as $Key) {
            # code...
            if (($Key->n8 == 1)) {
                # code...
                $Key->l_n8 = 1;
            }elseif (($Key->n8 == 2)) {
                # code...
                $Key->l_n8 = 2;
            }elseif (($Key->n8 == 3)) {
                # code...
                $Key->l_n8 = 3;
            }elseif (($Key->n8 == 4)) {
                # code...
                $Key->l_n8 = 4;
            }elseif (($Key->n8 == 5)) {
                # code...
                $Key->l_n8 = 5;
            }
        }

        foreach ($Karyawan as $Key) {
            # code...
            if (($Key->n9 == 1)) {
                # code...
                $Key->l_n9 = 1;
            }elseif (($Key->n9 == 2)) {
                # code...
                $Key->l_n9 = 2;
            }elseif (($Key->n9 == 3)) {
                # code...
                $Key->l_n9 = 3;
            }elseif (($Key->n9 == 4)) {
                # code...
                $Key->l_n9 = 4;
            }elseif (($Key->n9 == 5)) {
                # code...
                $Key->l_n9 = 5;
            }
        }

        foreach ($Karyawan as $Key) {
            # code...
            if (($Key->n10 == 1)) {
                # code...
                $Key->l_n10 = 1;
            }elseif (($Key->n10 == 2)) {
                # code...
                $Key->l_n10 = 2;
            }elseif (($Key->n10 == 3)) {
                # code...
                $Key->l_n10 = 3;
            }elseif (($Key->n10 == 4)) {
                # code...
                $Key->l_n10 = 4;
            }elseif (($Key->n10 == 5)) {
                # code...
                $Key->l_n10 = 5;
            }
        }

        foreach ($Karyawan as $Key) {
            # code...
            if (($Key->n11 == 1)) {
                # code...
                $Key->l_n11 = 1;
            }elseif (($Key->n11 == 2)) {
                # code...
                $Key->l_n11 = 2;
            }elseif (($Key->n11 == 3)) {
                # code...
                $Key->l_n11 = 3;
            }elseif (($Key->n11 == 4)) {
                # code...
                $Key->l_n11 = 4;
            }elseif (($Key->n11 == 5)) {
                # code...
                $Key->l_n11 = 5;
            }
        }

        foreach ($Karyawan as $Key) {
            # code...
            if (($Key->n12 == 1)) {
                # code...
                $Key->l_n12 = 1;
            }elseif (($Key->n12 == 2)) {
                # code...
                $Key->l_n12 = 2;
            }elseif (($Key->n12 == 3)) {
                # code...
                $Key->l_n12 = 3;
            }elseif (($Key->n12 == 4)) {
                # code...
                $Key->l_n12 = 4;
            }elseif (($Key->n12 == 5)) {
                # code...
                $Key->l_n12 = 5;
            }
        }

        foreach ($Karyawan as $Key) {
            # code...
            if (($Key->n13 == 1)) {
                # code...
                $Key->l_n13 = 1;
            }elseif (($Key->n13 == 2)) {
                # code...
                $Key->l_n13 = 2;
            }elseif (($Key->n13 == 3)) {
                # code...
                $Key->l_n13 = 3;
            }elseif (($Key->n13 == 4)) {
                # code...
                $Key->l_n13 = 4;
            }elseif (($Key->n13 == 5)) {
                # code...
                $Key->l_n13 = 5;
            }
        }

        foreach ($Karyawan as $Key) {
            # code...
            if (($Key->n14 == 1)) {
                # code...
                $Key->l_n14 = 1;
            }elseif (($Key->n14 == 2)) {
                # code...
                $Key->l_n14 = 2;
            }elseif (($Key->n14 == 3)) {
                # code...
                $Key->l_n14 = 3;
            }elseif (($Key->n14 == 4)) {
                # code...
                $Key->l_n14 = 4;
            }elseif (($Key->n14 == 5)) {
                # code...
                $Key->l_n14 = 5;
            }
        }

        foreach ($Karyawan as $Key) {
            # code...
            if (($Key->n15 == 1)) {
                # code...
                $Key->l_n15 = 1;
            }elseif (($Key->n15 == 2)) {
                # code...
                $Key->l_n15 = 2;
            }elseif (($Key->n15 == 3)) {
                # code...
                $Key->l_n15 = 3;
            }elseif (($Key->n15 == 4)) {
                # code...
                $Key->l_n15 = 4;
            }elseif (($Key->n15 == 5)) {
                # code...
                $Key->l_n15 = 5;
            }
        }
        return $Karyawan->all();
    }

    public function Linguistik()
    {
        # code...
        $Karyawan = $this->GetLinguistik();
        return Datatables::of($Karyawan)
                ->setRowId(function(Karyawan $Karyawan){
                    return $Karyawan->id_karyawan;
                })->editColumn('l_n1',function($Karyawan){
                    if ($Karyawan->l_n1 == 1 ) {
                        # code...
                        return "Sangat rendah";
                    }elseif ($Karyawan->l_n1 == 2) {
                        # code...
                        return "Cukup Rendah";
                    }elseif ($Karyawan->l_n1 == 3) {
                        # code...
                        return "Rendah";
                    }elseif ($Karyawan->l_n1 == 4) {
                        # code...
                        return "Tinggi";
                    }elseif ($Karyawan->l_n1 == 5) {
                        # code...
                        return "Sangat Tinggi";
                    }
                })->editColumn('l_n2',function($Karyawan){
                    if ($Karyawan->l_n2 == 1 ) {
                        # code...
                        return "sangat rendah";
                    }elseif ($Karyawan->l_n2 == 2) {
                        # code...
                        return "Cukup Rendah";
                    }elseif ($Karyawan->l_n2 == 3) {
                        # code...
                        return "Rendah";
                    }elseif ($Karyawan->l_n2 == 4) {
                        # code...
                        return "Tinggi";
                    }elseif ($Karyawan->l_n2 == 5) {
                        # code...
                        return "Sangat Tinggi";
                    }
                })->editColumn('l_n3',function($Karyawan){
                    if ($Karyawan->l_n3 == 1 ) {
                        # code...
                        return "sangat rendah";
                    }elseif ($Karyawan->l_n3 == 2) {
                        # code...
                        return "Cukup Rendah";
                    }elseif ($Karyawan->l_n3 == 3) {
                        # code...
                        return "Rendah";
                    }elseif ($Karyawan->l_n3 == 4) {
                        # code...
                        return "Tinggi";
                    }elseif ($Karyawan->l_n3 == 5) {
                        # code...
                        return "Sangat Tinggi";
                    }
                })->editColumn('l_n4',function($Karyawan){
                    if ($Karyawan->l_n4 == 1 ) {
                        # code...
                        return "sangat rendah";
                    }elseif ($Karyawan->l_n4 == 2) {
                        # code...
                        return "Cukup Rendah";
                    }elseif ($Karyawan->l_n4 == 3) {
                        # code...
                        return "Rendah";
                    }elseif ($Karyawan->l_n4 == 4) {
                        # code...
                        return "Tinggi";
                    }elseif ($Karyawan->l_n4 == 5) {
                        # code...
                        return "Sangat Tinggi";
                    }
                })->editColumn('l_n5',function($Karyawan){
                    if ($Karyawan->l_n5 == 1 ) {
                        # code...
                        return "sangat rendah";
                    }elseif ($Karyawan->l_n5 == 2) {
                        # code...
                        return "Cukup Rendah";
                    }elseif ($Karyawan->l_n5 == 3) {
                        # code...
                        return "Rendah";
                    }elseif ($Karyawan->l_n5 == 4) {
                        # code...
                        return "Tinggi";
                    }elseif ($Karyawan->l_n5 == 5) {
                        # code...
                        return "Sangat Tinggi";
                    }
                })
                ->make(true);

    }

    public function PMatriksKeputusan($periode){
        $Karyawan = $this->GetLinguistik($periode);
        $temp_n1 = 0;
        $temp_n2 = 0;
        $temp_n3 = 0;
        $temp_n4 = 0;
        $temp_n5 = 0;
        $temp_n6 = 0;
        $temp_n7 = 0;
        $temp_n8 = 0;
        $temp_n9 = 0;
        $temp_n10 = 0;
        $temp_n11 = 0;
        $temp_n12 = 0;
        $temp_n13 = 0;
        $temp_n14 = 0;
        $temp_n15 = 0;
        foreach ($Karyawan as $key) {
            # code...
            $temp_n1 += $key->l_n1*$key->l_n1;
            $temp_n2 += $key->l_n2*$key->l_n2;
            $temp_n3 += $key->l_n3*$key->l_n3;
            $temp_n4 += $key->l_n4*$key->l_n4;
            $temp_n5 += $key->l_n5*$key->l_n5;
            $temp_n6 += $key->l_n6*$key->l_n6;
            $temp_n7 += $key->l_n7*$key->l_n7;
            $temp_n8 += $key->l_n8*$key->l_n8;
            $temp_n9 += $key->l_n9*$key->l_n9;
            $temp_n10 += $key->l_n10*$key->l_n10;
            $temp_n11 += $key->l_n11*$key->l_n11;
            $temp_n12 += $key->l_n12*$key->l_n12;
            $temp_n13 += $key->l_n13*$key->l_n13;
            $temp_n14 += $key->l_n14*$key->l_n14;
            $temp_n15 += $key->l_n15*$key->l_n15;
        }
        foreach ($Karyawan as $key) {
            # code...
            $key->r_n1 = $key->l_n1/(sqrt($temp_n1));
            $key->r_n2 = $key->l_n2/(sqrt($temp_n2));
            $key->r_n3 = $key->l_n3/(sqrt($temp_n3));
            $key->r_n4 = $key->l_n4/(sqrt($temp_n4));
            $key->r_n5 = $key->l_n5/(sqrt($temp_n5));
            $key->r_n6 = $key->l_n6/(sqrt($temp_n6));
            $key->r_n7 = $key->l_n7/(sqrt($temp_n7));
            $key->r_n8 = $key->l_n8/(sqrt($temp_n8));
            $key->r_n9 = $key->l_n9/(sqrt($temp_n9));
            $key->r_n10 = $key->l_n10/(sqrt($temp_n10));
            $key->r_n11 = $key->l_n11/(sqrt($temp_n11));
            $key->r_n12 = $key->l_n12/(sqrt($temp_n12));
            $key->r_n13 = $key->l_n13/(sqrt($temp_n13));
            $key->r_n14 = $key->l_n14/(sqrt($temp_n14));
            $key->r_n15 = $key->l_n15/(sqrt($temp_n15));
        }
        return $Karyawan;
    }

    public function MatriksKeputusan($periode)
    {
        $Karyawan = $this->PMatriksKeputusan($periode);
        $data = [
            'MatriksKeputusan' => $Karyawan,
            'Periode' => $this->ViewModel->ViewPeriodeDipilih($periode),
        ];
        return view('pages/view/v_matriks_keputusan',$data);
    }

    public function PMatriksTerbobot($periode)
    {
        # code...
        $Karyawan = $this->PMatriksKeputusan($periode);
        $options = \App\Models\AllKriteria::getAllKeyValue();
        $c1 = json_decode($options['c1']);
        $c2 = json_decode($options['c2']);
        $c3 = json_decode($options['c3']);
        $c4 = json_decode($options['c4']);
        $c5 = json_decode($options['c5']);
        $c6 = json_decode($options['c6']);
        $c7 = json_decode($options['c7']);
        $c8 = json_decode($options['c8']);
        $c9 = json_decode($options['c9']);
        $c10 = json_decode($options['c10']);
        $c11 = json_decode($options['c11']);
        $c12 = json_decode($options['c12']);
        $c13 = json_decode($options['c13']);
        $c14 = json_decode($options['c14']);
        $c15 = json_decode($options['c15']);
        foreach ($Karyawan as $key) {
            # code...
            $key->v_c1 = $key->r_n1*$c1->weight;
            $key->v_c2 = $key->r_n2*$c2->weight;
            $key->v_c3 = $key->r_n3*$c3->weight;
            $key->v_c4 = $key->r_n4*$c4->weight;
            $key->v_c5 = $key->r_n5*$c5->weight;
            $key->v_c6 = $key->r_n6*$c6->weight;
            $key->v_c7 = $key->r_n7*$c7->weight;
            $key->v_c8 = $key->r_n8*$c8->weight;
            $key->v_c9 = $key->r_n9*$c9->weight;
            $key->v_c10 = $key->r_n10*$c10->weight;
            $key->v_c11 = $key->r_n11*$c11->weight;
            $key->v_c12 = $key->r_n12*$c12->weight;
            $key->v_c13 = $key->r_n13*$c13->weight;
            $key->v_c14 = $key->r_n14*$c14->weight;
            $key->v_c15 = $key->r_n15*$c15->weight;
        }
        return $Karyawan;
    }

    public function MatriksTerbobot($periode)
    {

        $Karyawan = $this->PMatriksTerbobot($periode);
        $data = [
            'MatriksTerbobot' => $Karyawan,
            'Periode' => $this->ViewModel->ViewPeriodeDipilih($periode),
        ];
        return view('pages/view/v_matriks_terbobot',$data);
    }


    public function PSolusiIdeal($periode)
    {
        # code...
        $options = \App\Models\AllKriteria::getAllKeyValue();
        $c1 = json_decode($options['c1']);
        $c2 = json_decode($options['c2']);
        $c3 = json_decode($options['c3']);
        $c4 = json_decode($options['c4']);
        $c5 = json_decode($options['c5']);
        $c6 = json_decode($options['c6']);
        $c7 = json_decode($options['c7']);
        $c8 = json_decode($options['c8']);
        $c9 = json_decode($options['c9']);
        $c10 = json_decode($options['c10']);
        $c11 = json_decode($options['c11']);
        $c12 = json_decode($options['c12']);
        $c13 = json_decode($options['c13']);
        $c14 = json_decode($options['c14']);
        $c15 = json_decode($options['c15']);
        $Karyawan = $this->PMatriksTerbobot($periode);
        $temp_n1 = [];
        $temp_n2 = [];
        $temp_n3 = [];
        $temp_n4 = [];
        $temp_n5 = [];
        $temp_n6 = [];
        $temp_n7 = [];
        $temp_n8 = [];
        $temp_n9 = [];
        $temp_n10 = [];
        $temp_n11 = [];
        $temp_n12 = [];
        $temp_n13 = [];
        $temp_n14 = [];
        $temp_n15 = [];
        foreach ($Karyawan as $key) {
            # code...
            $temp_n1[] = $key->v_c1;
            $temp_n2[] = $key->v_c2;
            $temp_n3[] = $key->v_c3;
            $temp_n4[] = $key->v_c4;
            $temp_n5[] = $key->v_c5;
            $temp_n6[] = $key->v_c6;
            $temp_n7[] = $key->v_c7;
            $temp_n8[] = $key->v_c8;
            $temp_n9[] = $key->v_c9;
            $temp_n10[] = $key->v_c10;
            $temp_n11[] = $key->v_c11;
            $temp_n12[] = $key->v_c12;
            $temp_n13[] = $key->v_c13;
            $temp_n14[] = $key->v_c14;
            $temp_n15[] = $key->v_c15;
        }

        $PSolusi = array(
            'c1' => array('positif' => (!$c1->is_cost) ?  max($temp_n1) :  min($temp_n1),'negatif' => ($c1->is_cost) ?  max($temp_n1) :  min($temp_n1)),
            'c2' => array('positif' => (!$c2->is_cost) ?  max($temp_n2) :  min($temp_n2),'negatif' => ($c2->is_cost) ?  max($temp_n2) :  min($temp_n2)),
            'c3' => array('positif' => (!$c3->is_cost) ?  max($temp_n3) :  min($temp_n3),'negatif' => ($c3->is_cost) ?  max($temp_n3) :  min($temp_n3)),
            'c4' => array('positif' => (!$c4->is_cost) ?  max($temp_n4) :  min($temp_n4),'negatif' => ($c4->is_cost) ?  max($temp_n4) :  min($temp_n4)),
            'c5' => array('positif' => (!$c5->is_cost) ?  max($temp_n5) :  min($temp_n5),'negatif' => ($c5->is_cost) ?  max($temp_n5) :  min($temp_n5)),
            'c6' => array('positif' => (!$c6->is_cost) ?  max($temp_n6) :  min($temp_n6),'negatif' => ($c6->is_cost) ?  max($temp_n6) :  min($temp_n6)),
            'c7' => array('positif' => (!$c7->is_cost) ?  max($temp_n7) :  min($temp_n7),'negatif' => ($c7->is_cost) ?  max($temp_n7) :  min($temp_n7)),
            'c8' => array('positif' => (!$c8->is_cost) ?  max($temp_n8) :  min($temp_n8),'negatif' => ($c8->is_cost) ?  max($temp_n8) :  min($temp_n8)),
            'c9' => array('positif' => (!$c9->is_cost) ?  max($temp_n9) :  min($temp_n9),'negatif' => ($c9->is_cost) ?  max($temp_n9) :  min($temp_n9)),
            'c10' => array('positif' => (!$c10->is_cost) ?  max($temp_n10) :  min($temp_n10),'negatif' => ($c10->is_cost) ?  max($temp_n10) :  min($temp_n10)),
            'c11' => array('positif' => (!$c11->is_cost) ?  max($temp_n11) :  min($temp_n11),'negatif' => ($c11->is_cost) ?  max($temp_n11) :  min($temp_n11)),
            'c12' => array('positif' => (!$c12->is_cost) ?  max($temp_n12) :  min($temp_n12),'negatif' => ($c12->is_cost) ?  max($temp_n12) :  min($temp_n12)),
            'c13' => array('positif' => (!$c13->is_cost) ?  max($temp_n13) :  min($temp_n13),'negatif' => ($c13->is_cost) ?  max($temp_n13) :  min($temp_n13)),
            'c14' => array('positif' => (!$c14->is_cost) ?  max($temp_n14) :  min($temp_n14),'negatif' => ($c14->is_cost) ?  max($temp_n14) :  min($temp_n14)),
            'c15' => array('positif' => (!$c15->is_cost) ?  max($temp_n15) :  min($temp_n15),'negatif' => ($c15->is_cost) ?  max($temp_n15) :  min($temp_n15)),
        );

        return $PSolusi;
    }

    public function SolusiIdeal($periode)
    {

        $Solusi = $this->PSolusiIdeal($periode);
        $data = [
            'Solusi' => $Solusi,
            'Periode' => $this->ViewModel->ViewPeriodeDipilih($periode),
        ];
        return view('pages/view/v_solusi_ideal',$data);
    }

    public function PJarakSolusiIdeal($periode)
    {
        # code...
        $Karyawan = $this->PMatriksTerbobot($periode);
        $solusi_ideal = $this->PSolusiIdeal($periode);
        foreach ($Karyawan as $key) {
            $key->a_c1 = pow(($key->v_c1 - $solusi_ideal['c1']['positif']),2);
            $key->a_c2 = pow(($key->v_c2 - $solusi_ideal['c2']['positif']),2);
            $key->a_c3 = pow(($key->v_c3 - $solusi_ideal['c3']['positif']),2);
            $key->a_c4 = pow(($key->v_c4 - $solusi_ideal['c4']['positif']),2);
            $key->a_c5 = pow(($key->v_c5 - $solusi_ideal['c5']['positif']),2);
            $key->a_c6 = pow(($key->v_c6 - $solusi_ideal['c6']['positif']),2);
            $key->a_c7 = pow(($key->v_c7 - $solusi_ideal['c7']['positif']),2);
            $key->a_c8 = pow(($key->v_c8 - $solusi_ideal['c8']['positif']),2);
            $key->a_c9 = pow(($key->v_c9 - $solusi_ideal['c9']['positif']),2);
            $key->a_c10 = pow(($key->v_c10 - $solusi_ideal['c10']['positif']),2);
            $key->a_c11 = pow(($key->v_c11 - $solusi_ideal['c11']['positif']),2);
            $key->a_c12 = pow(($key->v_c12 - $solusi_ideal['c12']['positif']),2);
            $key->a_c13 = pow(($key->v_c13 - $solusi_ideal['c13']['positif']),2);
            $key->a_c14 = pow(($key->v_c14 - $solusi_ideal['c14']['positif']),2);
            $key->a_c15 = pow(($key->v_c15 - $solusi_ideal['c15']['positif']),2);
            $key->a_total = sqrt($key->a_c1+$key->a_c2+$key->a_c3+$key->a_c4+$key->a_c5+$key->a_c6+$key->a_c7+$key->a_c8+$key->a_c9+$key->a_c10+$key->a_c11+$key->a_c12+$key->a_c13+$key->a_c14+$key->a_c15);
        }

        foreach ($Karyawan as $key) {
            $key->b_c1 = pow(($key->v_c1 - $solusi_ideal['c1']['negatif']),2);
            $key->b_c2 = pow(($key->v_c2 - $solusi_ideal['c2']['negatif']),2);
            $key->b_c3 = pow(($key->v_c3 - $solusi_ideal['c3']['negatif']),2);
            $key->b_c4 = pow(($key->v_c4 - $solusi_ideal['c4']['negatif']),2);
            $key->b_c5 = pow(($key->v_c5 - $solusi_ideal['c5']['negatif']),2);
            $key->b_c6 = pow(($key->v_c6 - $solusi_ideal['c6']['negatif']),2);
            $key->b_c7 = pow(($key->v_c7 - $solusi_ideal['c7']['negatif']),2);
            $key->b_c8 = pow(($key->v_c8 - $solusi_ideal['c8']['negatif']),2);
            $key->b_c9 = pow(($key->v_c9 - $solusi_ideal['c9']['negatif']),2);
            $key->b_c10 = pow(($key->v_c10 - $solusi_ideal['c10']['negatif']),2);
            $key->b_c11 = pow(($key->v_c11 - $solusi_ideal['c11']['negatif']),2);
            $key->b_c12 = pow(($key->v_c12 - $solusi_ideal['c12']['negatif']),2);
            $key->b_c13 = pow(($key->v_c13 - $solusi_ideal['c13']['negatif']),2);
            $key->b_c14 = pow(($key->v_c14 - $solusi_ideal['c14']['negatif']),2);
            $key->b_c15 = pow(($key->v_c15 - $solusi_ideal['c15']['negatif']),2);
            $key->b_total = sqrt($key->b_c1+$key->b_c2+$key->b_c3+$key->b_c4+$key->b_c5+$key->b_c6+$key->b_c7+$key->b_c8+$key->b_c9+$key->b_c10+$key->b_c11+$key->b_c12+$key->b_c13+$key->b_c14+$key->b_c15);
        }
        return $Karyawan;
    }

    public function JarakSolusiIdeal($periode)
    {
        $Karyawan = $this->PJarakSolusiIdeal($periode);
        $data = [
            'JarakSolusiIdeal' => $Karyawan,
            'Periode' => $this->ViewModel->ViewPeriodeDipilih($periode),
        ];
        return view('pages/view/v_jarak_solusi_ideal',$data);
    }

    public function PNilaiPreferensi($periode)
    {
        # code...
        $Karyawan = $this->PJarakSolusiIdeal($periode);
        $cek_periode = DB::table('t_periode')->where('periode',$periode)->first();
        $cek_data = DB::table('t_nilai_preferensi')
        ->where('id_periode',$cek_periode->id_periode)->first();
        foreach ($Karyawan as $key) {
            # code...
            $key->nilai_preferensi = $key->b_total/($key->a_total + $key->b_total);

            if ($cek_data == null) {
                $data_nilai_preferensi = array(
                    'id_periode'                 => $cek_periode->id_periode,
                    'id_karyawan'=> $key->id_karyawan,
                    'nama_karyawan'=> $key->nama_karyawan,
                    'id_divisi'=> $key->id_divisi,
                    'nilai_preferensi'                 => $key->nilai_preferensi,
                );
                $this->AddModel->NilaiPreferensiAdd($data_nilai_preferensi);
            }
        }

        return $Karyawan;
    }

    public function NilaiPreferensi($periode)
    {
        $Karyawan = $this->PNilaiPreferensi($periode);
        $data = [
            'NilaiPreferensi' => $this->ViewModel->ViewNilaiPreferensi($periode),
            // 'NilaiPreferensi' => $Karyawan,
            'Periode' => $this->ViewModel->ViewPeriodeDipilih($periode),
        ];
        return view('pages/view/v_nilai_preferensi',$data);
    }

    public function PIndexPrestasi($periode)
    {
        $cek_periode = DB::table('t_periode')->where('periode',$periode)->first();
        $cek_data = DB::table('t_index_prestasi')
        ->where('id_periode',$cek_periode->id_periode)->first();

        $Karyawan = DB::table('t_penilaian')
        ->join('t_periode','t_penilaian.id_periode','=','t_periode.id_periode')
        ->where('periode',$periode)->get();
        foreach ($Karyawan as $key) {
            $key->n1 = $key->n1;
            $key->n2 = $key->n2;
            $key->n3 = $key->n3;
            $key->n4 = $key->n4;
            $key->n5 = $key->n5;
            $key->n6 = $key->n6;
            $key->n7 = $key->n7;
            $key->n8 = $key->n8;
            $key->n9 = $key->n9;
            $key->n10 = $key->n10;
            $key->n11 = $key->n11;
            $key->n12 = $key->n12;
            $key->n13 = $key->n13;
            $key->n14 = $key->n14;
            $key->n15 = $key->n15;

            $key->n_total = $key->n1+$key->n2+$key->n3+$key->n4+$key->n5+$key->n6+$key->n7+$key->n8+$key->n9+$key->n10+$key->n11+$key->n12+$key->n13+$key->n14+$key->n15;

            if ($key->n_total >= 67){
                $ip = "Kinerja Sangat Baik";
            }elseif ($key->n_total >= 54){
                $ip = "Kinerja Baik";
            }elseif ($key->n_total >= 41){
                $ip = "Kinerja Cukup Baik";
            }elseif ($key->n_total >= 28){
                $ip = "Kinerja Buruk";
            }elseif ($key->n_total >= 15){
                $ip = "Kinerja Sangat Buruk";
            }

            if ($cek_data == null) {
                $data_index_prestasi = array(
                    'id_periode'            => $cek_periode->id_periode,
                    'id_karyawan'           => $key->id_karyawan,
                    'nama_karyawan'           => $key->nama_karyawan,
                    'id_divisi'           => $key->id_divisi,
                    'total_nilai'           => $key->n_total,
                    'index_prestasi'        => $ip,
                );
                $this->AddModel->IndexPrestasiAdd($data_index_prestasi);
            }
        }
        return $Karyawan;
    }

    public function IndexPrestasi($periode)
    {
        $IndexPrestasi = $this->PIndexPrestasi($periode);

        $cek_isi_total_nilai_periode = DB::table('t_periode')->where('periode',$periode)->first();

        if ($cek_isi_total_nilai_periode->total_nilai_karyawan == null) {
            $cek_id = DB::table('t_periode')->where('periode',$periode)->first();
            $id_periode = $cek_id->id_periode;
            $sum_nilai = DB::table('t_index_prestasi')->where('id_periode',$id_periode)->sum('total_nilai');
            $sum_nilai_periode = [
                'total_nilai_karyawan' => $sum_nilai,
            ];
            $this->EditModel->SumTotalNilaiPeriode($sum_nilai_periode,$id_periode);
        }

        $data = [
            'IndexPrestasi' => $IndexPrestasi,
            'Periode' => $this->ViewModel->ViewPeriodeDipilih($periode),
        ];
        return view('pages/view/v_index_prestasi',$data);
    }

    public function RefreshChart($periode)
    {
        $cek_nilai = DB::table('t_penilaian')->join('t_periode','t_penilaian.id_periode','=','t_periode.id_periode')->where('periode',$periode)->count('n1');
        $total_karyawan = DB::table('t_penilaian')->join('t_periode','t_penilaian.id_periode','=','t_periode.id_periode')->where('periode',$periode)->count('id_karyawan');
        if ($cek_nilai == $total_karyawan) {
            $Karyawan = $this->PNilaiPreferensi($periode);
            $IndexPrestasi = $this->PIndexPrestasi($periode);
            $cek_isi_total_nilai_periode = DB::table('t_periode')->where('periode',$periode)->first();
            if ($cek_isi_total_nilai_periode->total_nilai_karyawan == null) {
                $cek_id = DB::table('t_periode')->where('periode',$periode)->first();
                $id_periode = $cek_id->id_periode;
                $sum_nilai = DB::table('t_index_prestasi')->where('id_periode',$id_periode)->sum('total_nilai');
                $sum_nilai_periode = [
                    'total_nilai_karyawan' => $sum_nilai,
                ];
                $this->EditModel->SumTotalNilaiPeriode($sum_nilai_periode,$id_periode);
            }
            $pesan = '';
        }else{
            $pesan = 'Refresh Gagal, Penilaian Pada Periode Aktif Belum Selesai Dilakukan';
        }
        return redirect()->route('home')->with('Pesan',$pesan);
    }
}
