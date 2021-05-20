<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class clients extends Controller
{
    //
    function index(){
        return view('clients');
    }
    function addClient(Request $request){
        $request->validate([
            'name'=>'required | min:6',
            'sana'=>'required',
            'manzil'=>'required',
            'd_raqami'=>'required',
            'dv_raqami'=>'required',
            'kuzov'=>'required',
            'sh_raqami'=>'required'
        ]);

        $query = DB::table('client')->insert([
            'code'=>$request->input('code'),
            'name'=>$request->input('name'),
            'sana'=>$request->input('sana'),
            'manzil'=>$request->input('manzil'),
            'd_raqami'=>$request->input('d_raqami'),
            'dv_raqami'=>$request->input('dv_raqami'),
            'kuzov'=>$request->input('kuzov'),
            'sh_raqami'=>$request->input('sh_raqami'),
            'avto_turi'=>$request->input('avto_turi'),
            'rusumi'=>$request->input('rusumi'),
            'model'=>$request->input('model'),
            'ishlab_sana'=>$request->input('ishlab_sana'),
            'yoqilgi_turi'=>$request->input('yoqilgi_turi'),
            'rangi'=>$request->input('rangi'),
            'texnik_pass'=>$request->input('texnik_pass'),
            't_number'=>$request->input('t_number'),
            'tex_otgan_sana'=>$request->input('tex_otgan_sana'),
            'gaz_raqam'=>$request->input('gaz_raqam'),
            'gaz_abyom'=>$request->input('gaz_abyom'),
            'gaz_vazn'=>$request->input('gaz_vazn'),
            'gaz_ishlab_chiq'=>$request->input('gaz_ishlab_chiq'),
            'gaz_oxir_sana'=>$request->input('gaz_oxir_sana'),
            'oxirgi_tek'=>$request->input('oxirgi_tek'),

        ]);
        if($query){
            return back() ->with('success','Malumot ');
        }
        else{
            return back() ->with('fail','Something went wrong');
        }
    }
}
