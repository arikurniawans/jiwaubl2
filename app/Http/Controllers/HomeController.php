<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function getIndex(Request $request) {
         
        return view('datahome.index');
        // dd($grafikTransaksi);
    }

    public function getAbout(Request $request) {
         
        return view('datahome.about');
        // dd($grafikTransaksi);
    }

    public function getContact(Request $request) {
     
        return view('datahome.contact');
        // dd($grafikTransaksi);
}
}
