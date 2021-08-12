<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index(){
        
        if(Auth::user()->hasRole('clientes')){
            return view('dash.dashclientes')->with('menulist', $menuList);
        }elseif(Auth::user()->hasRole('user')){
            return view('dash.dashuser');
        }elseif(Auth::user()->hasRole('administrator')){
            return view('dash.dashadmin');
        }else{
            return view('dashboard');
        }
    }
}
