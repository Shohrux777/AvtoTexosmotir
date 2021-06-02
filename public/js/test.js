function func() {
    var s = '';
    if (document.getElementById('dav_raq_bel2').checked == true) {
        s += '1.1 ';
    }
    if (document.getElementById('aptechka2').checked == true) {
        s += '1.2 ';
    }
    if (document.getElementById('ogon2').checked == true) {
        s += '1.3 ';
    }
    if (document.getElementById('znak2').checked == true) {
        s += '1.4 ';
    }
    if (document.getElementById('urindiq2').checked == true) {
        s += '1.5 ';
    }
    if (document.getElementById('remen2').checked == true) {
        s += '1.6 ';
    }
    if (document.getElementById('bakavoy2').checked == true) {
        s += '1.7 ';
    }
    if (document.getElementById('qushimcha1').checked == true) {
        s += '1.8 ';
    } else if (document.getElementById('plyonka').value > 14) {
        s += '1.8 ';
    }
    if (document.getElementById('treshina_peshoyna1').checked == true) {
        s += '1.9 ';
    }
    if (document.getElementById('suv_puflagich2').checked == true) {
        s += '1.10 ';
    } else if (document.getElementById('soyabon2').checked == true) {
        s += '1.10 ';
    }
    if (document.getElementById('shina_talab2').checked == true) {
        s += '1.11 ';
    }
    if (document.getElementById('gayka_bulit2').checked == true) {
        s += '1.12 ';
    }
    if (document.getElementById('treshina1').checked == true) {
        s += '1.13 ';
    }
    if (document.getElementById('disk_qotirish1').checked == true) {
        s += '1.14 ';
    }
    if (document.getElementById('shina1').checked == true) {
        s += '1.15 ';
    } else if (document.getElementById('shina_ulcham').value > 4 || document.getElementById('shina_ulcham').value < 1.6) {
        s += '1.15 ';
    }
    if (document.getElementById('gildirak_bosim2').checked == true) {
        s += '1.16 ';
    }
    if (document.getElementById('uzoq_chiroq_soz2').checked == true) {
        s += '1.17 ';
    }
    if (document.getElementById('yaqin_chiroq_soz2').checked == true) {
        s += '1.18 ';
    }
    if (document.getElementById('old_tuman_chiroq_bor2').checked == true) {
        s += '1.19 ';
    } else if (document.getElementById('old_tuman_chiroq_soz2').checked == true) {
        s += '1.19 ';
    }
    if (document.getElementById('ort_har_chiroq_soz2').checked == true) {
        s += '1.20 ';
    }
    if (document.getElementById('burilish_chiroq_soz2').checked == true) {
        s += '1.21 ';
    }
    if (document.getElementById('avarinka_chiroq_soz2').checked == true) {
        s += '1.22 ';
    }
    if (document.getElementById('gabarit_chiroq_soz2').checked == true) {
        s += '1.23 ';
    }
    if (document.getElementById('orqa_gabarit_chiroq_bor2').checked == true) {
        s += '1.24 ';
    } else if (document.getElementById('orqa_gabarit_chiroq_soz2').checked == true) {
        s += '1.24 ';
    }
    if (document.getElementById('yorit_ogoh_mos2').checked == true) {
        s += '1.26 ';
    }
    if (document.getElementById('yorug_yunaltirgich1').checked == true) {
        s += '1.27 ';
    }
    if (document.getElementById('oyna_tozalagich2').checked == true) {
        s += '1.28 ';
    }
    if (document.getElementById('benzobak_yaroq2').checked == true) {
        s += '1.29 ';
    }
    if (document.getElementById('chambarak_rul1').checked == true) {
        s += '1.30 ';
    }
    if (document.getElementById('eshik_qulf2').checked == true) {
        s += '1.31 ';
    }
    if (document.getElementById('bamper_egil_radius2').checked == true) {
        s += '1.32 ';
    }
    if (document.getElementById('elektr_tashqi_nuq1').checked == true) {
        s += '1.33 ';
    }
    if (document.getElementById('aloxida_qism_kons2').checked == true) {
        s += '1.34 ';
    }
    if (document.getElementById('kuzov_zang1').checked == true) {
        s += '1.35 ';
    }
    if (document.getElementById('gulishetil_sinish1').checked == true) {
        s += '1.36 ';
    }
    if (document.getElementById('rul_kalonka_soz2').checked == true) {
        s += '2.1 ';
    }
    if (document.getElementById('rul_kalonka_mexanizm2').checked == true) {
        s += '2.2 ';
    }
    if (document.getElementById('rul_boshqaruv_miyor2').checked == true) {
        s += '2.3 ';
    }
    if (document.getElementById('rul_kuchaytir_ish_qob2').checked == true) {
        s += '2.4 ';
    }
    if (document.getElementById('dvigat_ish_barqaror2').checked == true) {
        s += '2.5 ';
    }
    if (document.getElementById('lift_cheg_qiymat2').checked == true) {
        s += '2.6 ';
    } else if (document.getElementById('lyuft').value > 10) {
        s += '2.6 ';
    }
    if (document.getElementById('benzin_min').value < 0.7) {
        s += '2.7 ';
    } else if (document.getElementById('benzin_max').value > 1) {
        s += '2.7 ';
    } else if (document.getElementById('gaz_min').value < 0.7) {
        s += '2.7 ';
    } else if (document.getElementById('gaz_max').value > 1) {
        s += '2.7 ';
    }
    if (document.getElementById('diel_gaz_tutun2').checked == true) {
        s += '2.8 ';
    }
    if ((document.getElementById('shovqin_umumiy').value - document.getElementById('shovqin_tashqi').value) > 91) {
        s += '2.9 ';
    }
    if (document.getElementById('ovozli_ogoh_quril2').checked == true) {
        s += '2.10 ';
    } else if (document.getElementById('signal_qobl').value < 90) {
        s += '2.10 ';
    }
    if (document.getElementById('tormoz_uzatish_qism2').checked == true) {
        s += '3.1 ';
    }
    if (document.getElementById('gildirak_tor_mex1').checked == true) {
        s += '3.2 ';
    }
    if (document.getElementById('bosim_tor_shikas1').checked == true) {
        s += '3.3 ';
    }
    if (document.getElementById('osma_uzat_kar2').checked == true) {
        s += '3.4 ';
    }
    if (document.getElementById('tezla_spidometr2').checked == true) {
        s += '3.5 ';
    }
    if (document.getElementById('tormoz_samara').value > 490) {
        s += '3.6 ';
    } else if (document.getElementById('uq_barqaror').value < 0.53) {
        s += '3.6 ';
    } else if (document.getElementById('tor_tizm_samara2').checked == true) {
        s += '3.6 ';
    }
    if (document.getElementById('birin_uq_buy_bar').value > 15) {
        s += '3.7 ';
    } else if (document.getElementById('ikkinchi_uq_buy_bar').value > 20) {
        s += '3.7 ';
    } else if (document.getElementById('uq_by_barqa2').checked == true) {
        s += '3.7 ';
    }
    if (document.getElementById('tormoz_sam').value < 0.16) {
        s += '3.8 ';
    } else if (document.getElementById('bosh_org_kuch').value > 392) {
        s += '3.8 ';
    } else if (document.getElementById('tormz_sam2').checked == true) {
        s += '3.8 ';
    }
    if (document.getElementById('gaz_balon_mavjud2').checked == true) {
        s += '3.9 ';
    }
    if (document.getElementById('stg_agregat2').checked == true) {
        s += '3.10 ';
    }
    if (document.getElementById('sng_propan2').checked == true) {
        s += '3.11 ';
    }
    if (s.length() > 0) {
        s += 't';
    }
    console.log(s);
    document.getElementById('status_by_natija').setAttribute('value', s);
    console.log(s);
}