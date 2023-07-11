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

class MJasaController extends Controller
{
    //
    public function getIndex(Request $request) 
    {

        if(Auth::user()->isAdmin == '1'){
            $jasa = DB::table('v_inovasi')->where('jenis_inovasi','jasa')->get(); 
        }else if(Auth::user()->isAdmin == '0'){
            $jasa = DB::table('v_inovasi')->where(array('jenis_inovasi' => 'jasa', 'id' => Auth::user()->id))->get();
        }

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
        $jasa = DB::table('v_inovasi')->where(array('jenis_inovasi' => 'jasa', 'id' => Auth::user()->id))->orderBy('id_inovasi', 'desc')->limit(1)->get();
       
        
        if($jasa->isEmpty())
        {
            $bidang = DB::table('bidang_tb')->where(array('statusbidang' => 'T', 'jenis_bidang' => '0'))->orderBy('idbidang', 'ASC')->get();

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
        }else{
            if ($jasa[0]->status_inovasi == 1 || $jasa[0]->status_inovasi == 3) {
                $bidang = DB::table('bidang_tb')->where(array('statusbidang' => 'T', 'jenis_bidang' => '0'))->orderBy('idbidang', 'ASC')->get();
    
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
            }else{
                Session::flash('warning','Anda dapat menambahkan pengajuan baru setelah pengajuan sebelumnya ditolak atau di publish oleh tim reviewer JIWAUBL');
                return redirect('masterjasa');           
            }    
    }
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
                'created_by' => Auth::id(),
                'created_at' => Carbon::now()->toDateTimeString()
	    	);
	            	
	        $simpan = DB::table('inovasi_tb')->insert($data);
            $ids = DB::table('inovasi_tb')->orderBy('id_inovasi', 'desc')->first();

	         if($simpan) {
                $datas = array(
                    'id_inovasi' => $ids->id_inovasi,
                    'created_at' => Carbon::now()->toDateTimeString()
                );
                $simpantahapan = DB::table('tahapan')->insert($datas);

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

    public function getShow($id) 
    {
        $jasa = DB::table('v_inovasi')->where('id_inovasi', base64_decode($id))->get();

        $data = [
            'title' => 'Detail Data Master Inovasi (Jasa)',
            'jasa' => $jasa,
            'breadcrumb' => [
                ['url' => 'dashboard' , 'name' => 'Dashboard'],
                ['url' => 'masterjasa' , 'name' => 'Master Inovasi (Jasa)'],
                ['url' => '' , 'name' => 'Detail Master Data Inovasi (Jasa)'],
            ],
            
            'testVariable' => 'Detail Master Data Inovasi (Jasa)'
        ];

        //  dd($produk);
        return view('datamasterjasa.show', $data);
    }


    public function getEdit($id) 
    {
        $jasa = DB::table('v_inovasi')->where('id_inovasi', base64_decode($id))->get();
        $bidang = DB::table('bidang_tb')->where(array('statusbidang' => 'T', 'jenis_bidang' => '1'))->orderBy('idbidang', 'ASC')->get();

        $data = [
            'title' => 'Ubah Data Master Inovasi (Jasa)',
            'jasa' => $jasa,
            'bidang' => $bidang,
            'breadcrumb' => [
                ['url' => 'dashboard' , 'name' => 'Dashboard'],
                ['url' => 'masterjasa' , 'name' => 'Master Inovasi (Jasa)'],
                ['url' => '' , 'name' => 'Ubah Master Data Inovasi (Jasa)'],
            ],
            
            'testVariable' => 'Ubah Master Data Inovasi (Jasa)'
        ];

        //  dd($produk);
        return view('datamasterjasa.edit', $data);
    }

    public function update(Request $request)
    {
    	$id = $request->post('id');
    	$jasa = DB::table('inovasi_tb')->where('id_inovasi', $id)->get();

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
        		unlink(public_path('storages/masterinovasi/jasa/'.$jasa[0]->unggah_dokumen));
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
                'updated_at' => Carbon::now()->toDateTimeString()
	    	);
	            	
	        $simpan = DB::table('inovasi_tb')->where('id_inovasi', $id)->update($data);
	        if($simpan) {
	            Session::flash('success','Berhasil mengubah master data inovasi (Jasa)');
	            return redirect('masterjasa');
	        }else{
	            //DB::rollback();
	            Session::flash('fail','Gagal mengubah master data inovasi (Jasa)');
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
                    Session::flash('success','Berhasil mengubah master data inovasi (Jasa)');
                    return redirect('masterjasa');
                }else{
                    //DB::rollback();
                    Session::flash('fail','Gagal mengubah master data inovasi (Jasa)');
                    return redirect()->back()->withInput();
                }
		    }

        }
        
    }

    public function destroy(Request $request)
    {
        $jasa = DB::table('inovasi_tb')->where('id_inovasi', $request->post('id'))->get();
    	unlink(public_path('storages/masterinovasi/jasa/'.$jasa[0]->unggah_dokumen));

    	$hapus =  DB::table('inovasi_tb')->where('id_inovasi', $request->post('id'));
        $hapus->delete();
        if($hapus) {
            Session::flash('success','Berhasil menghapus master data inovasi (Jasa)');
            return redirect('masterjasa');
        }else{
            //DB::rollback();
            Session::flash('fail','Gagal menghapus master data inovasi (Jasa)');
            return redirect('masterjasa');
        }

    }

    public function publish(Request $request)
    {
        $data = array(
            'status_inovasi' => '1',
            'updated_at' => Carbon::now()->toDateTimeString()
        );

        $ubah = DB::table('inovasi_tb')->where('id_inovasi', $request->post('id'))->update($data);
        if($ubah) {
            Session::flash('success','Berhasil publish master data inovasi (Produk)');
            return redirect('masterjasa');
        }else{
            //DB::rollback();
            Session::flash('fail','Gagal publish master data inovasi (Produk)');
            return redirect('masterjasa');
        }
    }
    
    public function getRevision($id) 
    {
        $jasa = DB::table('v_inovasi')->where('id_inovasi', base64_decode($id))->get();

        $data = [
            'title' => 'Perbaikan Data Master Inovasi (Produk)',
            'jasa' => $jasa,
            'breadcrumb' => [
                ['url' => 'dashboard' , 'name' => 'Dashboard'],
                ['url' => 'masterjasa' , 'name' => 'Master Inovasi (Produk)'],
                ['url' => '' , 'name' => 'Perbaikan Master Data Inovasi (Produk)'],
            ],
            
            'testVariable' => 'Perbaikan Master Data Inovasi (Produk)'
        ];

        //  dd($jasa);
        return view('datamasterjasa.revision', $data);
    }

    public function notes(Request $request)
    {
 
        $data = array(
            'catatan' => $request->post('catatan'),
            'status_inovasi' => '2',
            'updated_at' => Carbon::now()->toDateTimeString()
        );

        $ubah = DB::table('inovasi_tb')->where('id_inovasi', $request->post('id'))->update($data);
        if($ubah) {
            // Session::flash('success','Berhasil publish master data inovasi (Produk)');
            // return redirect('masterjasa');
            return response()->json(['message'=>'Berhasil']);
        }else{
            //DB::rollback();
            // Session::flash('fail','Gagal publish master data inovasi (Produk)');
            // return redirect('masterjasa');
            return response()->json(['message'=>'Gagal']);
        }
    }

    public function getRejected($id) 
    {
        $jasa = DB::table('v_inovasi')->where('id_inovasi', base64_decode($id))->get();

        $data = [
            'title' => 'Anulir Data Master Inovasi (Produk)',
            'jasa' => $jasa,
            'breadcrumb' => [
                ['url' => 'dashboard' , 'name' => 'Dashboard'],
                ['url' => 'masterjasa' , 'name' => 'Master Inovasi (Produk)'],
                ['url' => '' , 'name' => 'Anulir Master Data Inovasi (Produk)'],
            ],
            
            'testVariable' => 'Anulir Master Data Inovasi (Produk)'
        ];

        //  dd($jasa);
        return view('datamasterjasa.rejected', $data);
    }

    public function anulir(Request $request)
    {
 
        $data = array(
            'catatan' => $request->post('catatan'),
            'status_inovasi' => '3',
            'updated_at' => Carbon::now()->toDateTimeString()
        );

        $ubah = DB::table('inovasi_tb')->where('id_inovasi', $request->post('id'))->update($data);
        if($ubah) {
            // Session::flash('success','Berhasil publish master data inovasi (Produk)');
            // return redirect('masterjasa');
            return response()->json(['message'=>'Berhasil']);
        }else{
            //DB::rollback();
            // Session::flash('fail','Gagal publish master data inovasi (Produk)');
            // return redirect('masterjasa');
            return response()->json(['message'=>'Gagal']);
        }
    }
}
