<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    function AdminPageShow(){
        return view('admin.index');
    }
}
