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

class SliderController extends Controller
{
    //
    public function getIndex(Request $request) 
    {
        $slider1 = DB::table('slider_tb')->where('position', 'slider1')->orderBy('idslider', 'DESC')->get();
        $slider2 = DB::table('slider_tb')->where('position', 'slider2')->orderBy('idslider', 'DESC')->get();
        $slider3 = DB::table('slider_tb')->where('position', 'slider3')->orderBy('idslider', 'DESC')->get();
        $slider4 = DB::table('slider_tb')->where('position', 'slider4')->orderBy('idslider', 'DESC')->get();

        $data = [
            'title' => 'Manajemen Web Slider',
            'dataslider1' => $slider1,
            'dataslider2' => $slider2,
            'dataslider3' => $slider3,
            'dataslider4' => $slider4,
            'breadcrumb' => [
                ['url' => 'dashboard' , 'name' => 'Dashboard'],
                ['url' => 'webslider' , 'name' => 'Manajemen Web Slider'],
            ],
            
            'testVariable' => 'Manajemen Web Slider'
        ];

         
        return view('dataslider.index', $data);
        // dd($mobile);
    }

    public function change(Request $request)
    {
    	$id = $request->post('id');
    	$slider = DB::table('slider_tb')->where('idslider', $id)->get();

        $validator = Validator::make($request->all(), [ // <---
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar'  => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if($validator->fails()) {
        	 return Redirect::back()->withErrors($validator);
        }else{

        	if ($files = $request->file('gambar')) {
        		unlink(public_path('storages/slider/'.$slider[0]->gambar));
            //store file into document folder
            $image = $request->file('gambar');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storages/slider/'), $new_name);

	    	$data = array(
	    		'judul' => $request->post('judul'),
	    		'deskripsi' => $request->post('deskripsi'),
	    		'gambar' => $new_name,
                'updated_at' => Carbon::now()->toDateTimeString()
	    	);
	            	
	        $simpan = DB::table('slider_tb')->where('idslider', $id)->update($data);
	        if($simpan) {
	            Session::flash('success','Berhasil mengubah web slider');
	            return redirect('webslider');
	        }else{
	            //DB::rollback();
	            Session::flash('fail','Gagal mengubah web slider');
	            return redirect()->back()->withInput();
	        }

		    }else{
		    	$data = array(
                    'judul' => $request->post('judul'),
                    'deskripsi' => $request->post('deskripsi'),
                    'updated_at' => Carbon::now()->toDateTimeString()
                );
                        
                $simpan = DB::table('slider_tb')->where('idslider', $id)->update($data);
                if($simpan) {
                    Session::flash('success','Berhasil mengubah web slider');
                    return redirect('webslider');
                }else{
                    //DB::rollback();
                    Session::flash('fail','Gagal mengubah web slider');
                    return redirect()->back()->withInput();
                }
		    }

        }
        
    }

    public function activate(Request $request)
    {
    	$id = $request->post('id');
        
        $data = array(
            'activate' => $request->post('activate'),
            'updated_at' => Carbon::now()->toDateTimeString()
        );
                
        $simpan = DB::table('slider_tb')->where('idslider', $id)->update($data);
        if($simpan) {
            Session::flash('success','Berhasil mengubah status aktivasi web slider');
            return redirect('webslider');
        }else{
            //DB::rollback();
            Session::flash('fail','Gagal mengubah status aktivasi web slider');
            return redirect()->back()->withInput();
        }
        
    }

}
