<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Input; //untuk input::get
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


use Redirect; //untuk redirect
use DB;
use Session;
use Illuminate\Http\Request;
use Validator;
use Laravolt\Avatar\Facade as Avatar;
use Carbon\Carbon;
use App\Mail\MailSend;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{

    // public function login (){

    //     $data['logo'] = DB::table('tblsekolah')->limit(1)->first();
    //     return view('authen.login',$data);
    // }

	public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [ // <---
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        if($validator->fails()) {
        	 return Redirect::back()->withErrors($validator);
        }else{

			$avatarku = rand() . '-default.png';        	
			// Avatar::create('Susilo Bambang Yudhoyono')->save(public_path('storages/profil/').'sample.png');
	    	$data = array(
	    		'name' => $request->post('nama'),
	    		'email' => $request->post('email'),
				'password' => Hash::make($request->post('password')),
	    		'pasfoto' => $avatarku,
				'isAdmin' => '0',
				'roles' => '1',
                'created_at' => Carbon::now()->toDateTimeString()
	    	);

			Avatar::create($request->post('nama'))->save(public_path('storages/profil/').$avatarku, $quality = 100);
	            	
	        $simpan = DB::table('users')->insert($data);

	        if($simpan) {

				Mail::to($request->post('email'))->send(new MailSend($data));

	            Session::flash('success','Berhasil Register');
	            return redirect('/login');
	        }else{
	            //DB::rollback();
	            Session::flash('fail','Gagal Register');
	            return redirect('/login');
	        }


        }
        
    }

    public function login()
    {
    	if(Auth::check())
    	{
    		if(Auth::user()->isAdmin == '1'){
				return redirect('dashboard');
			}else if(Auth::user()->isAdmin == '0'){
				return redirect('dashboardinovator');
			}
    	}else{
    		return view('login');
    	}
    }

    public function loginpage()
    {
        Auth::logout();
        return view('/login');
    }

    public function loginaksi(Request $request)
    {
    	$data = [
    		'email' => $request->input('username'),
    		'password' => $request->input('password')
    	];

    	if(Auth::Attempt($data))
    	{    		
			if(Auth::user()->isAdmin == '1'){
				return redirect('dashboard');
			}else if(Auth::user()->isAdmin == '0'){
				return redirect('dashboardinovator');
			}
    	}else{
    		Session::flash('error','Username atau Password Salah');
    		return redirect('/');
    	}
    }

    public function logoutaksi()
    {
    	Auth::logout();
    	return redirect('/');
    }

}
