<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Redirect; //untuk redirect
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class DashboardController extends Controller
{
    //
    public function getIndex(Request $request) {
        
        $produk = DB::table('v_tahapan')->where('jenis','produk')->get();        

        $data = [
            'title' => 'Dashboard',
            'datatahapan' => $produk,
            'breadcrumb' => [
                ['url' => '/' , 'name' => 'Dashboard'],
                ['url' => '/interface' , 'name' => 'Interface'],
            ],
            
            'testVariable' => 'Dashboard'
        ];

         
        return view('datadashboard.index', $data);
        // dd($grafikTransaksi);
    }

    public function getDasbor(Request $request) {
        
        $produk = DB::table('v_tahapan')->where(array('jenis' => 'produk', 'iduser' => Auth::user()->id))->orderBy('idinovasi', 'desc')->get();
        $jasa = DB::table('v_tahapan')->where(array('jenis' => 'jasa', 'iduser' => Auth::user()->id))->orderBy('idinovasi', 'desc')->get();

        $data = [
            'title' => 'Dashboard',
            'datatahapan' => $produk,
            'datatahapan2' => $jasa,
            'breadcrumb' => [
                ['url' => '/' , 'name' => 'Dashboard'],
                ['url' => '/interface' , 'name' => 'Interface'],
            ],
            
            'testVariable' => 'Dashboard'
        ];

         
        return view('datadashboard.dasborinovator', $data);
        // dd($jasa);
    }

}
