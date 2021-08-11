<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index(){
        $menu = new \App\Models\Menu;
        $menuList = $menu->tree();


        $menu = new \App\Models\Menu;
        $menuList = $menu->tree();
        
       // return view('dashboard')->with('menulist', $menuList);
        
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
