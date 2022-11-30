<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatController extends Controller
{
    //
    function CatShow(){
        return view('admin.cat');
    }

    function Show(Request $req){
        $cat_name = $req -> add_cat;
        echo $cat_name;

        return view('admin.cat');
    }
}
