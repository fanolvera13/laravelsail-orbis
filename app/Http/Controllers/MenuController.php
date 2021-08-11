<?php

namespace App\Http\Controllers;

use \App\Models\Menu
use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function getMenu()
    {
        $menu = new \App\Models\Menu;
        $menuList = $menu->tree();
        
        return view('dashboard')->with('menulist', $menuList);
    }
}
