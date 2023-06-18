<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Redirect; //untuk redirect
use Session;
use Illuminate\Http\Request;
use Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function getIndex(Request $request) 
    {
        // $users = DB::table('users')->where('id','kab')->orderBy('idharga', 'DESC')->get();
        // $jsonUsers = file_get_contents('https://api.manupakabbadi.com/user');
        // $users =  json_decode($jsonUsers,true);

        $data = [
            'title' => 'Profil Pengguna',
            // 'profil' => '',
            'breadcrumb' => [
                ['url' => 'dashboard' , 'name' => 'Dashboard'],
                ['url' => 'profil' , 'name' => 'Profil Pengguna'],
            ],
            
            'testVariable' => 'Profil Pengguna'
        ];

         
        return view('datauser.profil', $data);
        // dd($mobile);
    }

    public function getUser(Request $request) 
    {
        $datauser = DB::table('users')->where('roles', '1')->orderBy('id', 'desc')->get();

        $data = [
            'title' => 'Data Inovator',
            'datauser' => $datauser,
            'breadcrumb' => [
                ['url' => 'dashboard' , 'name' => 'Dashboard'],
                ['url' => 'datainovator' , 'name' => 'Data Inovator'],
            ],
            
            'testVariable' => 'Data Inovator'
        ];

         
        return view('datauser.alluser', $data);
    }
    
    public function getOperator(Request $request) 
    {
        // $jsonUsers = file_get_contents('https://api.manupakabbadi.com/user');
        // $users =  json_decode($jsonUsers,true);
        $users = DB::table('v_users')->whereNotIn('idhak', [0,2,3,7])->get();

        $data = [
            'title' => 'Manajemen Operator',
            'datausers' => $users,
            'breadcrumb' => [
                ['url' => 'dashboard' , 'name' => 'Dashboard'],
                ['url' => '/profil/usermanagement/operator' , 'name' => 'Manajemen Operator'],
            ],
            
            'testVariable' => 'Manajemen Operator'
        ];
        // print_r($users['data']);

         
        return view('datauser.alluseroperator', $data);
        // dd($mobile);
    }

    public function getCreate(Request $request) 
    {
        $hakakses = DB::table('hakakses')->where('status','T')->orderBy('idhak', 'DESC')->get();

        $data = [
            'title' => 'Daftarkan Operator Baru',
            'dataakses' => $hakakses,
            'breadcrumb' => [
                ['url' => 'dashboard' , 'name' => 'Dashboard'],
                ['url' => '/profil/usermanagement/operator' , 'name' => 'Manajemen Operator'],
                ['url' => '' , 'name' => 'Daftarkan Operator Baru'],
            ],
            
            'testVariable' => 'Daftarkan Operator Baru'
        ];

         
        return view('datauser.create', $data);
        // dd($mobile);
    }

    public function getEdit($id) 
    {
        $users = DB::table('v_users')->where('id', base64_decode($id))->get();
        $hakakses = DB::table('hakakses')->where('status','T')->orderBy('idhak', 'DESC')->get();

        $data = [
            'title' => 'Ubah Data Operator',
            'datauser' => $users,
            'dataakses' => $hakakses,
            'breadcrumb' => [
                ['url' => 'dashboard' , 'name' => 'Dashboard'],
                ['url' => '/profil/usermanagement/operator' , 'name' => 'Manajemen Operator'],
                ['url' => '' , 'name' => 'Ubah Data Operator'],
            ],
            
            'testVariable' => 'Ubah Data Operator'
        ];

         
        return view('datauser.edit', $data);
        // dd($mobile);
    }


    public function store(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        $validator = Validator::make($request->all(), [ // <---
            'nama' => 'required',
            'email' => 'required|email',
            'jenkel' => 'required',
            'date' => 'required',
            'nohp' => 'required',
            // 'hakakses' => 'required',
            'alamat' => 'required'
        ]);

        if($validator->fails()) {
              return Redirect::back()->withErrors($validator);
        }else{
            $data = array(
                'name' => $request->post('nama'),
                'email' => $request->post('email'),
                'jenkel' => $request->post('jenkel'),
                'tgl_lahir' => $request->post('date'),
                'nohp' => $request->post('nohp'),
                'password' => \Hash::make('12345678'),
                'isAdmin' => false,
                'roles' => '1',
                'alamat' => $request->post('alamat'),
                'created_at' => Carbon::now()->toDateTimeString()
            );

            $cek = DB::table('users')
                    ->where('email', $request->post('email'))
                    ->where('nohp', $request->post('nohp'))
                    ->get();

            if($cek->isEmpty()){
                $simpan = DB::table('users')->insert($data);
                    if($simpan) {
                        Session::flash('success','Berhasil menambahkan Operator baru');
                        return redirect('/profil/usermanagement/operator');
                     }else{
                        return Redirect::back()->withErrors('Gagal menambahkan Operator baru !');
                    }
            }else{
                return Redirect::back()->withErrors('Operator sudah terdaftar dengan email / no. handphone berikut !');
            }

      // dd($cek);      
        }
        
    }

    public function update(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $id = $request->post('id');

        $validator = Validator::make($request->all(), [ // <---
            'nama' => 'required',
            'email' => 'required|email',
            'jenkel' => 'required',
            'date' => 'required',
            'nohp' => 'required',
            // 'hakakses' => 'required',
            'alamat' => 'required'
        ]);

        if($validator->fails()) {
              return Redirect::back()->withErrors($validator);
        }else{
            $data = array(
                'name' => $request->post('nama'),
                'email' => $request->post('email'),
                'jenkel' => $request->post('jenkel'),
                'tgl_lahir' => $request->post('date'),
                'nohp' => $request->post('nohp'),
                'isAdmin' => false,
                // 'roles' => $request->post('hakakses'),
                'alamat' => $request->post('alamat'),
                'updated_at' => Carbon::now()->toDateTimeString()
            );

            $simpan = DB::table('users')->where('id', $id)->update($data);
            if($simpan) {
                Session::flash('success','Berhasil mengubah data operator');
                return redirect('/profil/usermanagement/operator');
            }else{
                return Redirect::back()->withErrors('Gagal mengubah data operator !');
            }

      // dd($cek);      
        }
        
    }

    public function change(Request $request)
    {        
        $validator = Validator::make($request->all(), [ // <---
            'newpassword' => 'required',
            'repassword' => 'required'
        ]);

        if($validator->fails()) {
             return Redirect::back()->withErrors($validator);
        }else{

            if($request->post('newpassword') == $request->post('repassword')){
                $data = array(
                    'password' => \Hash::make($request->post('newpassword'))
                );
                        
                $simpan = DB::table('users')->where('id', Auth::user()->id)->update($data);
                if($simpan) {
                    Session::flash('success','Password berhasil di ubah, silahkan login kembali');
                    return redirect('profil');
                }else{
                    //DB::rollback();
                    Session::flash('fail','Gagal mengubah password');
                    return redirect('profil');
                }
            }else{
                return Redirect::back()->withErrors('Password tidak sama dengan retype !');
            }
            

        }
        
    }

    public function changeprofil(Request $request)
    {
        $id = Auth::user()->id;
        $users = DB::table('users')->where('id', $id)->get();

        $validator = Validator::make($request->all(), [ // <---
            'gambar'  => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if($validator->fails()) {
             return Redirect::back()->withErrors($validator);
        }else{

            if ($files = $request->file('gambar')) {
                if($users[0]->pasfoto != 'user-photo.png'){
                    unlink(public_path('storages/profil/'.$users[0]->pasfoto));
                }                
                //store file into document folder
                $image = $request->file('gambar');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('storages/profil/'), $new_name);

                $data = array(
                    'pasfoto' => $new_name
                );
                        
                $simpan = DB::table('users')->where('id', $id)->update($data);
                if($simpan) {
                    Session::flash('success','Berhasil mengubah foto profil');
                    return redirect('profil');
                }else{
                    //DB::rollback();
                    Session::flash('fail','Gagal mengubah foto profil');
                    return redirect('profil');
                }

            }

        }        
    }

    public function aktif($id, $status)
    {
        $users = DB::table('users')->where('id', $id)->get();
        
        if($users[0]->status == "T"){
            $tes = "F";
        }else if($users[0]->status == "F"){
            $tes = "T";
        }
        

        $ubah = DB::table('users')->where('id', $id)->update(['status' => $tes]);
        if($ubah) {
            return response()->json(['message'=>'Berhasil']);
        }else{
            //DB::rollback();
            return response()->json(['message'=>'Gagal']);
        }
    }

    public function reset($id)
    {        
        $ubah = DB::table('users')->where('id', $id)->update(['password' => \Hash::make('12345678')]);
        if($ubah) {
            return response()->json(['message'=>'Berhasil']);
        }else{
            //DB::rollback();
            return response()->json(['message'=>'Gagal']);
        }
    }



}
