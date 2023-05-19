<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Redirect; //untuk redirect
use Session;
use Illuminate\Http\Request;
use Validator;

class MHargaKabController extends Controller
{
    //
    public function getIndex(Request $request) 
    {

        $harga = DB::table('masterharga')->where('jenis_mitra','3')->orderBy('idharga', 'DESC')->get();

        $data = [
            'title' => 'Daftar Harga Minyak Jelantah Kabupaten',
            'dataharga' => $harga,
            'breadcrumb' => [
                ['url' => 'dashboard' , 'name' => 'Dashboard'],
                ['url' => 'price/regency' , 'name' => 'Daftar Harga Minyak Jelantah Kabupaten'],
            ],
            
            'testVariable' => 'Daftar Harga Minyak Jelantah Kabupaten'
        ];

         
        return view('datapriceregency.index', $data);
        // dd($mobile);
    }

    public function getCreate() 
    {
        $data = [
            'title' => 'Daftar Harga Minyak Jelantah Kabupaten',
            'breadcrumb' => [
                ['url' => 'dashboard' , 'name' => 'Dashboard'],
                ['url' => 'price/regency' , 'name' => 'Daftar Harga Kabupaten'],
                ['url' => '' , 'name' => 'Buat Daftar Harga Kabupaten'],
            ],
            
            'testVariable' => 'Buat Daftar Harga Minyak Jelantah Kabupaten'
        ];

         
        return view('datapriceregency.create', $data);
    }

    public function store(Request $request)
    {
    	$validator = Validator::make($request->all(), [ // <---
            'namaprov' => 'required',
            'kabkota' => 'required',
            'harga' => 'required',
        ]);

        if($validator->fails()) {
        	 return Redirect::back()->withErrors($validator);
        }else{
        	$data = array(
	    		'provinsi' => $request->post('namaprov'),
	    		'kabkota' => $request->post('kabkota'),
	    		'harga' => str_replace(".", "", $request->post('harga')),
	    		'jenis_mitra' => '3'
	    	);

	    	$cek = DB::table('masterharga')
	    			->where('kabkota', $request->post('kabkota'))
	    			->where('jenis_mitra', '3')
	    			->get();

	    	if($cek->isEmpty()){
	    		$simpan = DB::table('masterharga')->insert($data);
				    if($simpan) {
				        Session::flash('success','Master data harga mitra kabupaten berhasil ditambahkan');
				        return redirect('/price/regency');
				     }else{
				        //DB::rollback();
				        return Redirect::back()->withErrors($validator);
				    }
	    	}else{
	    		return Redirect::back()->withErrors('Data sudah ada dalam database !');
	    	}

      // dd($cek);    	
	    }
        
    }

    public function getEdit($id) 
    {
    	$harga = DB::table('masterharga')->where('idharga', base64_decode($id))->get();

        $data = [
            'title' => 'Daftar Harga Minyak Jelantah Kabupaten',
            'dataharga' => $harga,
            'breadcrumb' => [
                ['url' => 'dashboard' , 'name' => 'Dashboard'],
                ['url' => 'price/regency' , 'name' => 'Daftar Harga'],
                ['url' => '' , 'name' => 'Ubah Daftar Harga Minyak Jelantah Kabupaten'],
            ],
            
            'testVariable' => 'Ubah Daftar Harga Minyak Jelantah Kabupaten'
        ];

         
        return view('datapriceregency.edit', $data);
    }

    public function update(Request $request)
    {
    	$id = $request->input('id');
    	$validator = Validator::make($request->all(), [ // <---            
            'harga' => 'required',
        ]);

        if($validator->fails()) {
        	 return Redirect::back()->withErrors($validator);
        }else{
        	$data = array(
	    		'harga' => str_replace(".", "", $request->post('harga'))
	    	);

	    	$simpan = DB::table('masterharga')->where('idharga', $id)->update($data);
			if($simpan) {
				Session::flash('success','Master data harga mitra kabupaten berhasil diubah');
				return redirect('/price/regency');
			}else{
				//DB::rollback();
				return Redirect::back()->withErrors($validator);
			}

      // dd($cek);    	
	    }
        
    }

    public function destroy($id)
    {    	
    	$hapus =  DB::table('masterharga')->where('idharga', $id);
        $hapus->delete();
        if($hapus) {
            // Session::flash('success','Setup Value baru berhasil ditambahkan');
    		return response()->json(['message'=>'Berhasil']);
        }else{
            //DB::rollback();
            // Session::flash('fail','Setup Value baru gagal ditambahkan');
    		return response()->json(['message'=>'Gagal']);
        }

    }


}
