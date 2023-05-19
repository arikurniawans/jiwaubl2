<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Redirect; //untuk redirect
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserRoleController extends Controller
{
    //
    public function getIndex(Request $request) 
    {

        $hakakses = DB::table('hakakses')->orderBy('idhak', 'DESC')->get();

        $data = [
            'title' => 'Manajemen Role',
            'datahakakses' => $hakakses,
            'breadcrumb' => [
                ['url' => 'dashboard' , 'name' => 'Dashboard'],
                ['url' => 'userrole' , 'name' => 'Manajemen Role'],
            ],
            
            'testVariable' => 'Manajemen Role'
        ];

         
        return view('datahakakses.index', $data);
    }

    public function getCreate() 
    {

        $data = [
            'title' => 'Manajemen Role',
            'breadcrumb' => [
                ['url' => 'dashboard' , 'name' => 'Dashboard'],
                ['url' => 'userrole' , 'name' => 'Manajemen Role'],
                ['url' => '' , 'name' => 'Tambah Manajemen Role'],
            ],
            
            'testVariable' => 'Tambah Manajemen Role'
        ];

         
        return view('datahakakses.create', $data);
    }

    public function getEdit($id) 
    {
    	$hakakses = DB::table('hakakses')->where('idhak', base64_decode($id))->get();

        $data = [
            'title' => 'Manajemen Role',
            'datahakakses' => $hakakses,
            'breadcrumb' => [
                ['url' => 'dashboard' , 'name' => 'Dashboard'],
                ['url' => 'userrole' , 'name' => 'Manajemen Role'],
                ['url' => '' , 'name' => 'Ubah Manajemen Role'],
            ],
            
            'testVariable' => 'Ubah Manajemen Role'
        ];

         
        return view('datahakakses.edit', $data);
    }

    public function store(Request $request)
    {
    	$messages = [
            'required' => ':Data harus di isi !',
        ];
         
        $this->validate($request,[
            'nama' => 'required',
            'keterangan' => 'required'
        ],$messages);

    	$data = array(
    		'jenis_akses' => $request->post('nama'),
    		'keterangan' => $request->post('keterangan')
    	);
            	
        $simpan = DB::table('hakakses')->insert($data);
        if($simpan) {
            Session::flash('success','Berhasil menambahkan manajemen role');
            return redirect('userrole');
        }else{
            //DB::rollback();
            Session::flash('fail','Gagal menambahkan manajemen role');
            return redirect('create',$request);
        }
        
    }

    public function update(Request $request)
    {
    	$id = $request->post('id');

    	$messages = [
            'required' => ':Data harus di isi !',
        ];
         
        $this->validate($request,[
            'nama' => 'required',
            'keterangan' => 'required'
        ],$messages);

    	$data = array(
    		'jenis_akses' => $request->post('nama'),
    		'keterangan' => $request->post('keterangan')
    	);
            	
        $ubah = DB::table('hakakses')->where('idhak', $id)->update($data);
        if($ubah) {
            Session::flash('success','Berhasil mengubah data manajemen role');
            return redirect('userrole');
        }else{
            //DB::rollback();
            Session::flash('fail','Gagal mengubah data manajemen role');
            return redirect('create',$request);
        }
    }

    public function aktif($id, $status)
    {
        $hakakses = DB::table('hakakses')->where('idhak', $id)->get();
        
        if($hakakses[0]->status == "T"){
            $tes = "F";
        }else if($hakakses[0]->status == "F"){
            $tes = "T";
        }

    	$ubah = DB::table('hakakses')->where('idhak', $id)->update(['status' => $tes]);
        if($ubah) {
            return response()->json(['message'=>$ubah]);
        }else{
            //DB::rollback();
            return response()->json(['message'=>$ubah]);
        }
    }

}
