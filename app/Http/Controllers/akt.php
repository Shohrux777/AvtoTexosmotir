<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\aktLists;
use Illuminate\Http\Request;

class akt extends Controller
{
    //
    function aktList(){
        $data = DB::table('planshit')->join('client','planshit.users_id','=','client.id')
        ->select('planshit.*', 'client.name', 'client.code','client.manzil','client.d_raqami','client.t_number')
        ->get();
        return view('akt',['lists'=> $data]);
    }
    function aktView($id){
        $data = aktLists::join('client','planshit.users_id','=','client.id')
        ->select('planshit.*', 'client.name', 'client.code','client.manzil','client.d_raqami','client.t_number')
        ->get()-> where('id', $id)->first();
        return view('aktView',['akts'=> $data]);
    }
    function aktWord($id){
        $data = aktLists::join('client','planshit.users_id','=','client.id')
        ->select('planshit.*', 'client.name','client.sh_raqami','client.avto_turi', 'client.code','client.manzil','client.model','client.rangi','client.d_raqami','client.dv_raqami','client.t_number', 'client.ishlab_sana', 'client.kuzov', 'client.texnik_pass','client.yoqilgi_turi','client.gaz_ishlab_chiq','client.oxirgi_tek', 'client.gaz_raqam','client.gaz_oxir_sana')
        ->get()-> where('id', $id)->first();
        return view('aktPrint',['akt'=> $data]);
    }
}
