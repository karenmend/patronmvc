<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Para tener acceso a cualquier funcion de este controller tenemos que pasar por este middleware
    public function __construct(){
        $this->middleware('auth');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
}
