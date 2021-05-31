<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PlanshitKuzatuvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('planshit', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('users_id');
            $table->string('dav_raq_bel');
            $table->string('aptechka');
            $table->string('ogon');
            $table->string('znak');
            $table->string('urindiq');
            $table->string('remen');
            $table->string('bakavoy');
            $table->string('qushimcha');
            $table->double('plyonka_size');
            $table->string('treshina_peshoyna');
            $table->string('suv_puflagich');
            $table->string('soyabon');
            $table->string('shina_talab');
            $table->string('gayka_bulit');
            $table->string('treshina');
            $table->string('disk_qotirish');
            $table->string('shina');
            $table->double('shinalar_ulcham');
            $table->string('gildirak_bosim');
            $table->string('uzoq_chiroq_soz');
            $table->string('yaqin_chiroq_soz');
            $table->string('old_tuman_chiroq_bor');
            $table->string('old_tuman_chiroq_soz');
            $table->string('ort_har_chiroq_soz');
            $table->string('burilish_chiroq_soz');
            $table->string('avarinka_chiroq_soz');
            $table->string('gabarit_chiroq_soz');
            $table->string('orqa_gabarit_chiroq_bor');
            $table->string('orqa_gabarit_chiroq_soz');
            $table->string('xavf_yostiq');
            $table->string('yorit_ogoh_mos');
            $table->string('yorug_yunaltirgich');
            $table->string('oyna_tozalagich');
            $table->string('benzobak_yaroq');
            $table->string('chambarak_rul');
            $table->string('eshik_qulf');
            $table->string('bamper_egil_radius');
            $table->string('elektr_tashqi_nuq');
            $table->string('aloxida_qism_kons');
            $table->string('kuzov_zang');
            $table->string('gulishetil_sinish');
            $table->string('rul_kalonka_soz');
            $table->string('rul_kalonka_mexanizm');
            $table->string('rul_boshqaruv_miyor');
            $table->string('rul_kuchaytir_ish_qob');
            $table->string('dvigat_ish_barqaror');
            $table->string('lift_cheg_qiymat');
            $table->double('lyuft_qiymat');
            $table->double('benzin_yuq_val_chas');
            $table->double('benzin_pas_val_chas');
            $table->double('gaz_yuq_val_chas');
            $table->double('gaz_pas_val_chas');
            $table->string('diel_gaz_tutun');
            $table->double('tashqi_shovqin');
            $table->double('umumiy_shovqin');
            $table->string('ovozli_ogoh_quril');
            $table->double('signal_qobil');
            $table->string('tormoz_uzatish_qism');
            $table->string('gildirak_tor_mex');
            $table->string('bosim_tor_shikas');
            $table->string('osma_uzat_kar');
            $table->string('tezla_spidometr');
            $table->double('tormoz_sam');
            $table->double('uq_barqar');
            $table->string('tor_tizm_samara');
            $table->double('birinchi_uq_bar');
            $table->double('ikkinch_uq_bar');
            $table->string('uq_by_barqa');
            $table->double('turar_tor_sam');
            $table->double('boshqar_org_kuch');
            $table->string('tormz_sam');
            $table->string('gaz_balon_mavjud');
            $table->string('stg_agregat');
            $table->string('sng_propan');
            $table->string('status');
            $table->string('spidometr');
            $table->mediumText('imzo')->nullable();
            $table->mediumText('rasm')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
