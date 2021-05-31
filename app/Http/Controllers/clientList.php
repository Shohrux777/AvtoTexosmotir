<?php

namespace App\Http\Controllers;
use App\Models\listofclient;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class clientList extends Controller
{
    function list(){
        $data = listofclient::paginate(10);
        return view('clientList', ['clients'=>$data]);
    }
    function planshit(){
        $data = listofclient::paginate(10);
        return view('planshitList', ['plan_clients'=>$data]);
    }
    function EditClient($id){
        $edit = listofclient::all()-> where('id', $id)->first();
        return view('clientEdit', ['edits'=>$edit]);
    }
    function deleteClient($id){
        $del = listofclient::find($id);
        $del ->delete();
        return redirect('clientList');
    }
    function plan_client($id){
        $data = listofclient::find($id);
        return view('planshit', ['plan_cli'=>$data]);
    }
    function printClient($id){
        $data = listofclient::find($id);
        return view('clientPrint', ['prints'=>$data]);
    }
    function showClient($id){
        $show = listofclient::all()-> where('id', $id)->first();
        return view('clientShow', ['shows'=>$show]);
    }
    function updateClint(Request $request){
        $query = DB::table('client')->where('id', $request->id)->update([
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
            return redirect('clientList');

        }
        else{
            return back() ->with('fail','Something went wrong');
        }


    }
}
