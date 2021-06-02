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
        ->paginate(20);
        return view('akt',['lists'=> $data]);
    }
    function aktView($id){
        $data = aktLists::join('client','planshit.users_id','=','client.id')
        ->select('planshit.*', 'client.name', 'client.code','client.manzil','client.d_raqami','client.t_number')
        ->get()-> where('id', $id)->first();
        $imag = aktLists::join('img','planshit.users_id','=','img.id')->select('img.image','planshit.id')->get()->where('id', $id)->all();
        return view('aktView',['akts'=> $data],['imag'=>$imag]);
    }
    function aktWord($id){
        $data = aktLists::join('client','planshit.users_id','=','client.id')
        ->select('planshit.*', 'client.name','client.sh_raqami','client.avto_turi', 'client.code','client.manzil','client.model','client.rangi','client.d_raqami','client.dv_raqami','client.t_number', 'client.ishlab_sana', 'client.kuzov', 'client.texnik_pass','client.yoqilgi_turi','client.gaz_ishlab_chiq','client.oxirgi_tek', 'client.gaz_raqam','client.gaz_oxir_sana')
        ->get()-> where('id', $id)->first();
        return view('aktPrint',['akt'=> $data]);
    }
    function check_pass(Request $request){
        $pass = $request->get('password');
        $add_id = $request->get('get_id');
        $datas = DB::table('parol')->get();
        foreach($datas as $data){
            if($data->password == $pass){
                DB::table('plan')->insert([
                    'code'=>$add_id
                ]);
                return redirect('akt');
            }
            else{
                return back() ->with('fail',"Invalid password");
            }
        }
    }
}
