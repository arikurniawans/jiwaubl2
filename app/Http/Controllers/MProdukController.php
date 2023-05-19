<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Redirect; //untuk redirect
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Validator;

class MProdukController extends Controller
{
    //
    public function getIndex(Request $request) 
    {

        $produk = DB::table('v_inovasi')->where('jenis_inovasi','produk')->get();

        $data = [
            'title' => 'Daftar Data Master Inovasi (Produk)',
            'dataproduk' => $produk,
            'breadcrumb' => [
                ['url' => 'dashboard' , 'name' => 'Dashboard'],
                ['url' => 'masterproduk' , 'name' => 'Master Inovasi (Produk)'],
            ],
            
            'testVariable' => 'Daftar Data Master Inovasi (Produk)'
        ];

         
        return view('datamasterproduk.index', $data);
        // dd($mobile);
    }

    public function getCreate() 
    {
        $bidang = DB::table('bidang_tb')->where(array('statusbidang' => 'T', 'jenis_bidang' => '0'))->orderBy('idbidang', 'ASC')->get();

        $data = [
            'title' => 'Buat Data Master Inovasi (Produk)',
            'bidang' => $bidang,
            'breadcrumb' => [
                ['url' => 'dashboard' , 'name' => 'Dashboard'],
                ['url' => 'masterproduk' , 'name' => 'Master Inovasi (Produk)'],
                ['url' => '' , 'name' => 'Buat Master Data Inovasi (Produk)'],
            ],
            
            'testVariable' => 'Buat Master Data Inovasi (Produk)'
        ];

         
        return view('datamasterproduk.create', $data);
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
            $image->move(public_path('storages/masterinovasi/produk/'), $new_name);

	    	$data = array(
	    		'judul' => $request->post('judul'),
	    		'bidang' => $request->post('bidang'),
	    		'deskripsi_produk' => $request->post('deskripsi'),
	    		'harga_produk' => str_replace(".", "", $request->post('harga')),
	    		'unggah_dokumen' => $new_name,
                'jenis_inovasi' => 'produk',
                'created_by' => Auth::id()
	    	);
	            	
	        $simpan = DB::table('inovasi_tb')->insert($data);
	        if($simpan) {
	            Session::flash('success','Berhasil menambahkan inovasi (produk) baru');
	            return redirect('masterproduk');
	        }else{
	            //DB::rollback();
	            Session::flash('fail','Gagal menambahkan inovasi (produk) baru');
	            return redirect('create');
	        }

		    }else{
		    	return Redirect::back()->withErrors($validator);
		    }

        }
        
    }

    public function getShow($id) 
    {
        $produk = DB::table('v_inovasi')->where('id_inovasi', base64_decode($id))->get();

        $data = [
            'title' => 'Detail Data Master Inovasi (Produk)',
            'produk' => $produk,
            'breadcrumb' => [
                ['url' => 'dashboard' , 'name' => 'Dashboard'],
                ['url' => 'masterproduk' , 'name' => 'Master Inovasi (Produk)'],
                ['url' => '' , 'name' => 'Detail Master Data Inovasi (Produk)'],
            ],
            
            'testVariable' => 'Detail Master Data Inovasi (Produk)'
        ];

        //  dd($produk);
        return view('datamasterproduk.show', $data);
    }

    public function getEdit($id) 
    {
        $produk = DB::table('v_inovasi')->where('id_inovasi', base64_decode($id))->get();
        $bidang = DB::table('bidang_tb')->where(array('statusbidang' => 'T', 'jenis_bidang' => '0'))->orderBy('idbidang', 'ASC')->get();

        $data = [
            'title' => 'Ubah Data Master Inovasi (Produk)',
            'produk' => $produk,
            'bidang' => $bidang,
            'breadcrumb' => [
                ['url' => 'dashboard' , 'name' => 'Dashboard'],
                ['url' => 'masterproduk' , 'name' => 'Master Inovasi (Produk)'],
                ['url' => '' , 'name' => 'Ubah Master Data Inovasi (Produk)'],
            ],
            
            'testVariable' => 'Ubah Master Data Inovasi (Produk)'
        ];

        //  dd($produk);
        return view('datamasterproduk.edit', $data);
    }

    public function update(Request $request)
    {
    	$id = $request->post('id');
    	$produk = DB::table('inovasi_tb')->where('id_inovasi', $id)->get();

        $validator = Validator::make($request->all(), [ // <---
            'judul' => 'required',
            'bidang' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'gambar'  => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if($validator->fails()) {
        	 return Redirect::back()->withErrors($validator);
        }else{

        	if ($files = $request->file('gambar')) {
        		unlink(public_path('storages/masterinovasi/produk/'.$produk[0]->unggah_dokumen));
            //store file into document folder
            $image = $request->file('gambar');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storages/masterinovasi/produk/'), $new_name);

	    	$data = array(
	    		'judul' => $request->post('judul'),
	    		'bidang' => $request->post('bidang'),
	    		'deskripsi_produk' => $request->post('deskripsi'),
	    		'harga_produk' => str_replace(".", "", $request->post('harga')),
	    		'unggah_dokumen' => $new_name,
                'updated_at' => Carbon::now()->toDateTimeString()
	    	);
	            	
	        $simpan = DB::table('inovasi_tb')->where('id_inovasi', $id)->update($data);
	        if($simpan) {
	            Session::flash('success','Berhasil mengubah master data inovasi (Produk)');
	            return redirect('masterproduk');
	        }else{
	            //DB::rollback();
	            Session::flash('fail','Gagal mengubah master data inovasi (Produk)');
	            return redirect()->back()->withInput();
	        }

		    }else{
		    	$data = array(
                    'judul' => $request->post('judul'),
                    'bidang' => $request->post('bidang'),
                    'deskripsi_produk' => $request->post('deskripsi'),
                    'harga_produk' => str_replace(".", "", $request->post('harga')),
                    'updated_at' => Carbon::now()->toDateTimeString()
                );
                        
                $simpan = DB::table('inovasi_tb')->where('id_inovasi', $id)->update($data);
                if($simpan) {
                    Session::flash('success','Berhasil mengubah master data inovasi (Produk)');
                    return redirect('masterproduk');
                }else{
                    //DB::rollback();
                    Session::flash('fail','Gagal mengubah master data inovasi (Produk)');
                    return redirect()->back()->withInput();
                }
		    }

        }
        
    }

    public function destroy(Request $request)
    {
        $produk = DB::table('inovasi_tb')->where('id_inovasi', $request->post('id'))->get();
    	unlink(public_path('storages/masterinovasi/produk/'.$produk[0]->unggah_dokumen));

    	$hapus =  DB::table('inovasi_tb')->where('id_inovasi', $request->post('id'));
        $hapus->delete();
        if($hapus) {
            Session::flash('success','Berhasil menghapus master data inovasi (Produk)');
            return redirect('masterproduk');
        }else{
            //DB::rollback();
            Session::flash('fail','Gagal menghapus master data inovasi (Produk)');
            return redirect('masterproduk');
        }

    }
    

}
