<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class planshit extends Controller
{
    function addPlanshit(Request $request){
        $request->validate([
            'plyonka_size'=>'required',
            'shinalar_ulcham'=>'required',
            'lyuft_qiymat'=>'required',
            'benzin_yuq_val_chas'=>'required',
            'benzin_pas_val_chas'=>'required',
            'gaz_yuq_val_chas'=>'required',
            'gaz_pas_val_chas'=>'required',
            'tashqi_shovqin'=>'required',
            'umumiy_shovqin'=>'required',
            'signal_qobil'=>'required',
            'tormoz_sam'=>'required',
            'uq_barqar'=>'required',
            'birinchi_uq_bar'=>'required',
            'ikkinch_uq_bar'=>'required',
            'turar_tor_sam'=>'required',
            'boshqar_org_kuch'=>'required',
            'status_natija'=> 'required'
        ]);

        $query = DB::table('planshit')->insert([
            'users_id'=>$request->input('users_id'),
            'dav_raq_bel'=>$request->input('dav_raq_bel'),
            'aptechka'=>$request->input('aptechka'),
            'ogon'=>$request->input('ogon'),
            'znak'=>$request->input('znak'),
            'urindiq'=>$request->input('urindiq'),
            'remen'=>$request->input('remen'),
            'bakavoy'=>$request->input('bakavoy'),
            'qushimcha'=>$request->input('qushimcha'),
            'plyonka_size'=>$request->input('plyonka_size'),
            'treshina_peshoyna'=>$request->input('treshina_peshoyna'),
            'suv_puflagich'=>$request->input('suv_puflagich'),
            'soyabon'=>$request->input('soyabon'),
            'shina_talab'=>$request->input('shina_talab'),
            'gayka_bulit'=>$request->input('gayka_bulit'),
            'treshina'=>$request->input('treshina'),
            'disk_qotirish'=>$request->input('disk_qotirish'),
            'shina'=>$request->input('shina'),
            'shinalar_ulcham'=>$request->input('shinalar_ulcham'),
            'gildirak_bosim'=>$request->input('gildirak_bosim'),
            'uzoq_chiroq_soz'=>$request->input('uzoq_chiroq_soz'),
            'yaqin_chiroq_soz'=>$request->input('yaqin_chiroq_soz'),
            'old_tuman_chiroq_bor'=>$request->input('old_tuman_chiroq_bor'),
            'old_tuman_chiroq_soz'=>$request->input('old_tuman_chiroq_soz'),
            'ort_har_chiroq_soz'=>$request->input('ort_har_chiroq_soz'),
            'burilish_chiroq_soz'=>$request->input('burilish_chiroq_soz'),
            'avarinka_chiroq_soz'=>$request->input('avarinka_chiroq_soz'),
            'gabarit_chiroq_soz'=>$request->input('gabarit_chiroq_soz'),
            'orqa_gabarit_chiroq_bor'=>$request->input('orqa_gabarit_chiroq_bor'),
            'orqa_gabarit_chiroq_soz'=>$request->input('orqa_gabarit_chiroq_soz'),
            'xavf_yostiq'=>$request->input('xavf_yostiq'),
            'yorit_ogoh_mos'=>$request->input('yorit_ogoh_mos'),
            'yorug_yunaltirgich'=>$request->input('yorug_yunaltirgich'),
            'oyna_tozalagich'=>$request->input('oyna_tozalagich'),
            'benzobak_yaroq'=>$request->input('benzobak_yaroq'),
            'chambarak_rul'=>$request->input('chambarak_rul'),
            'eshik_qulf'=>$request->input('eshik_qulf'),
            'bamper_egil_radius'=>$request->input('bamper_egil_radius'),
            'elektr_tashqi_nuq'=>$request->input('elektr_tashqi_nuq'),
            'aloxida_qism_kons'=>$request->input('aloxida_qism_kons'),
            'kuzov_zang'=>$request->input('kuzov_zang'),
            'gulishetil_sinish'=>$request->input('gulishetil_sinish'),
            'rul_kalonka_soz'=>$request->input('rul_kalonka_soz'),
            'rul_kalonka_mexanizm'=>$request->input('rul_kalonka_mexanizm'),
            'rul_boshqaruv_miyor'=>$request->input('rul_boshqaruv_miyor'),
            'rul_kuchaytir_ish_qob'=>$request->input('rul_kuchaytir_ish_qob'),
            'dvigat_ish_barqaror'=>$request->input('dvigat_ish_barqaror'),
            'lift_cheg_qiymat'=>$request->input('lift_cheg_qiymat'),
            'lyuft_qiymat'=>$request->input('lyuft_qiymat'),
            'benzin_yuq_val_chas'=>$request->input('benzin_yuq_val_chas'),
            'benzin_pas_val_chas'=>$request->input('benzin_pas_val_chas'),
            'gaz_yuq_val_chas'=>$request->input('gaz_yuq_val_chas'),
            'gaz_pas_val_chas'=>$request->input('gaz_pas_val_chas'),
            'diel_gaz_tutun'=>$request->input('diel_gaz_tutun'),
            'tashqi_shovqin'=>$request->input('tashqi_shovqin'),
            'umumiy_shovqin'=>$request->input('umumiy_shovqin'),
            'ovozli_ogoh_quril'=>$request->input('ovozli_ogoh_quril'),
            'signal_qobil'=>$request->input('signal_qobil'),
            'tormoz_uzatish_qism'=>$request->input('tormoz_uzatish_qism'),
            'gildirak_tor_mex'=>$request->input('gildirak_tor_mex'),
            'bosim_tor_shikas'=>$request->input('bosim_tor_shikas'),
            'osma_uzat_kar'=>$request->input('osma_uzat_kar'),
            'tezla_spidometr'=>$request->input('tezla_spidometr'),
            'tormoz_sam'=>$request->input('tormoz_sam'),
            'uq_barqar'=>$request->input('uq_barqar'),
            'tor_tizm_samara'=>$request->input('tor_tizm_samara'),
            'birinchi_uq_bar'=>$request->input('birinchi_uq_bar'),
            'ikkinch_uq_bar'=>$request->input('ikkinch_uq_bar'),
            'uq_by_barqa'=>$request->input('uq_by_barqa'),
            'turar_tor_sam'=>$request->input('turar_tor_sam'),
            'boshqar_org_kuch'=>$request->input('boshqar_org_kuch'),
            'tormz_sam'=>$request->input('tormz_sam'),
            'gaz_balon_mavjud'=>$request->input('gaz_balon_mavjud'),
            'stg_agregat'=>$request->input('stg_agregat'),
            'sng_propan'=>$request->input('sng_propan'),
            'spidometr'=>$request->input('spidometr'),
            'status'=>$request->input('status_natija'),

        ]);
        if($query){
            return redirect('planshitList');
        }
        else{
            return back() ->with('fail','Something went wrong');
        }
    }
}
