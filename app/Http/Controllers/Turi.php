<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Turi extends Controller
{
    function index(){
        return view('clients'); 
    }
    function addturi(Request $request){
        return $request->input();
    }
}
