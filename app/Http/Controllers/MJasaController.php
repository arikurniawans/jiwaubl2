<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Redirect; //untuk redirect
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class MJasaController extends Controller
{
    //
    public function getIndex(Request $request) 
    {

        $jasa = DB::table('v_inovasi')->where('jenis_inovasi','jasa')->get();

        $data = [
            'title' => 'Daftar Data Master Inovasi (jasa)',
            'datajasa' => $jasa,
            'breadcrumb' => [
                ['url' => 'dashboard' , 'name' => 'Dashboard'],
                ['url' => 'masterjasa' , 'name' => 'Master Inovasi (jasa)'],
            ],
            
            'testVariable' => 'Daftar Data Master Inovasi (jasa)'
        ];

         
        return view('datamasterjasa.index', $data);
        // dd($mobile);
    }

    public function getCreate() 
    {
        $bidang = DB::table('bidang_tb')->where(array('statusbidang' => 'T', 'jenis_bidang' => '1'))->orderBy('idbidang', 'ASC')->get();

        $data = [
            'title' => 'Buat Data Master Inovasi (jasa)',
            'bidang' => $bidang,
            'breadcrumb' => [
                ['url' => 'dashboard' , 'name' => 'Dashboard'],
                ['url' => 'masterjasa' , 'name' => 'Master Inovasi (jasa)'],
                ['url' => '' , 'name' => 'Buat Master Data Inovasi (jasa)'],
            ],
            
            'testVariable' => 'Buat Master Data Inovasi (jasa)'
        ];

         
        return view('datamasterjasa.create', $data);
    }

    public function store(Request $request)
    {
    	$batas = request()->validate([
         'gambar'  => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $validator = Validator::make($request->all(), [ // <---
            'judul' => 'required',
            'bidang' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'gambar'  => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if($validator->fails()) {
        	 return Redirect::back()->withErrors($validator);
        }else{

        	if ($files = $request->file('gambar')) {
            //store file into document folder
            $image = $request->file('gambar');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storages/masterinovasi/jasa/'), $new_name);

	    	$data = array(
	    		'judul' => $request->post('judul'),
	    		'bidang' => $request->post('bidang'),
	    		'deskripsi_produk' => $request->post('deskripsi'),
	    		'harga_produk' => str_replace(".", "", $request->post('harga')),
	    		'unggah_dokumen' => $new_name,
                'jenis_inovasi' => 'jasa',
                'created_by' => Auth::id()
	    	);
	            	
	        $simpan = DB::table('inovasi_tb')->insert($data);
	        if($simpan) {
	            Session::flash('success','Berhasil menambahkan inovasi (jasa) baru');
	            return redirect('masterjasa');
	        }else{
	            //DB::rollback();
	            Session::flash('fail','Gagal menambahkan inovasi (jasa) baru');
	            return redirect('create');
	        }

		    }else{
		    	return Redirect::back()->withErrors($validator);
		    }

        }
        
    }
    
}
