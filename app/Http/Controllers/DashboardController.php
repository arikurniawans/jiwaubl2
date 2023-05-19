<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Redirect; //untuk redirect
use Session;
use Illuminate\Http\Request;
use Validator;

class DashboardController extends Controller
{
    //
    public function getIndex(Request $request) {
        
        
        $data = [
            'title' => 'Dashboard',
            'breadcrumb' => [
                ['url' => '/' , 'name' => 'Dashboard'],
                ['url' => '/interface' , 'name' => 'Interface'],
            ],
            
            'testVariable' => 'Dashboard'
        ];

         
        return view('datadashboard.index', $data);
        // dd($grafikTransaksi);
    }
}
