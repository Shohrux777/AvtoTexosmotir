@extends('bootstrap')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="{{url('css/client.css')}}">
<script src="{{url('js/client.js')}}"></script>
    <x-app-layout>
        <div class="list" >
            <div class="list_title">
                <h2>Dalolatnoma</h2>
            </div>
            <div class=" mt-4 container table-responsive" >
                <h2 class="mb-3">{{$akts->name}}</h2>
                <div class="d-flex">
                    <a><button onclick="printed()" class="d-flex btn btn-info">Print
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer ml-1 mt-1" width="17" height="17" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                            <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                            <rect x="7" y="13" width="10" height="8" rx="2" />
                        </svg>
                        </button>
                    </a>
                    <button onclick="show()" class="d-flex btn btn-secondary ml-1">Qayta ruxsat</button>
                </div>
                {{-- <a href="/delete/{{$akts->id}}"><button  class="btn btn-danger">Delete</button></a> --}}
               <div id="print">
                    <table  class="table table-bordered ">
                        <tr class="text-left">
                            <th>Талабларга мувофиқ давлат рақам белгиларининг ўрнатилиши. Мих парчин (зак) (ГОС. НОМЕР)</th>
                            @if($akts->dav_raq_bel == 't')
                            <td>Тўғри</td>
                            @else
                            <td class="text-danger">Нотўғри</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Биинчи тиббий ёрдам кўрсатиш учун тиббиёт қутисининг мавжудлиги (Аптечка)</th>
                            @if($akts->aptechka == 't')
                            <td>Бор</td>
                            @else
                            <td class="text-danger">Йуқ</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Ўрнатилган  талабларга мувофиқ ўт ўчириш мосламасининг мавжудлиги (Ог нетушитель)</th>
                            @if($akts->ogon == 't')
                            <td>Бор</td>
                            @else
                            <td class="text-danger">Йуқ</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Йўл транспорт ходисаси (авария) холатида тўхтаб туриш белисининг  мавжудлиги. (Стоп сигнал)(Жилет)</th>
                            @if($akts->znak == 't')
                            <td>Бор</td>
                            @else
                            <td class="text-danger">Йуқ</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Ўриндиқар созлаш  механизми. (СИДЕНИЯ)</th>
                            @if($akts->urindiq == 't')
                            <td>Cоз</td>
                            @else
                            <td class="text-danger">Носоз</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>АТВ*нинг хавфсизлик камарларини соз ҳолатда бўлишини таъминлаш. (Ремень)</th>
                            @if($akts->remen == 't')
                            <td>Cоз</td>
                            @else
                            <td class="text-danger">Носоз</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Талабларга мувофиқ  орқани  кўриш  ойналарининг мавжудлиги.(ОРҚА ОЙНА ВА БАКАВОЙ)</th>
                            @if($akts->bakavoy == 't')
                            <td>Мавжуд</td>
                            @else
                            <td class="text-danger">Мавжуд емас</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Хайдовчи ўриндиғдан кўринишни чеклайдиган қўшимча нарсалар мавжуд эмаслиги.</th>
                            @if($akts->qushimcha == 't')
                            <td>Мавжуд емас</td>
                            @else
                            <td class="text-danger">Мавжуд</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Олд  пешойнанинг юқори  қисмидаги плёнканинг белгиланган талабларга мувофиқлиги.(14см)</th>
                            @if($akts->plyonka_size <= 14)
                            <td>{{$akts->plyonka_size}}</td>
                            @else
                            <td class="text-danger">{{$akts->plyonka_size}}</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Пешойнада хайдовчининг ойна артгич худудида ёриқлар ва синган чизиқларнинг йўқлиги (ТРЕЩИНА)</th>
                            @if($akts->treshina_peshoyna == 't')
                            <td>Йуқ</td>
                            @else
                            <td class="text-danger">Бор</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Cув пуркагичнинг борлиги</th>
                            @if($akts->suv_puflagich == 't')
                            <td>Бор</td>
                            @else
                            <td class="text-danger">Йуқ</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Cоябон борлиги</th>
                            @if($akts->soyabon == 't')
                            <td>Бор</td>
                            @else
                            <td class="text-danger">Йуқ</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>АТВ*даги шиналар (ғилдираклар)нинг талабларга мувофиқ ўрнатилганлиги. (БИР ХИЛ ЎЛЧАМ)</th>
                            @if($akts->shina_talab == 't')
                            <td>Мувофиқ</td>
                            @else
                            <td class="text-danger">Номувофиқ</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Ғилдиракнинг диски ва ички тўсиқларни махкам қотириш учун барча гайка-болтларнинг мавжудлиги. (БОЛТЛАР)</th>
                            @if($akts->gayka_bulit == 't')
                            <td>Мавжуд</td>
                            @else
                            <td class="text-danger">Мавжуд емас</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Ғилдиракларнинг дискаларида ёриқлар бўлмаслиги. (ТРЕШИНА)</th>
                            @if($akts->treshina == 't')
                            <td>Йуқ</td>
                            @else
                            <td class="text-danger">Бор</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Дисклардаги қотириш тешикларнинг шакл ва ўлчамларида бузилиш мавжуд эмаслигини таъминлаш.</th>
                            @if($akts->disk_qotirish == 't')
                            <td>Мавжуд емас</td>
                            @else
                            <td class="text-danger">Мавжуд</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Шиналардан фойдаланишда нуқсонларнинг мавжуд эмаслиги</th>
                            @if($akts->shina == 't')
                            <td>Нуқсонлар мавжуд емас</td>
                            @else
                            <td class="text-danger">Нуқсонлар мавжуд</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Шина ўлчамлари </th>
                            @if($akts->shinalar_ulcham >= 1.6 && $akts->shinalar_ulcham <= 4)
                            <td>{{$akts->shinalar_ulcham}}</td>
                            @else
                            <td class="text-danger">{{$akts->shinalar_ulcham}}</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>АТВ*нинг ғилдиракдаги босим кўрсаткичларининг бирхиллигини таъминлаш. (2.2-2.4.)BAR</th>
                            @if($akts->gildirak_bosim == 't')
                            <td>Бирхил</td>
                            @else
                            <td class="text-danger">Бирхил емас</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Узоқни  ёритувчи чироқлар – 2та оқ</th>
                            @if($akts->uzoq_chiroq_soz == 't')
                            <td>Соз</td>
                            @else
                            <td class="text-danger">Носоз</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Яқинни ёритувчи чироқлар -2 та оқ</th>
                            @if($akts->yaqin_chiroq_soz == 't')
                            <td>Соз</td>
                            @else
                            <td class="text-danger">Носоз</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Олд туманга қарши чироқлар -2 та оқ ёки сариқ</th>
                            @if($akts->old_tuman_chiroq_bor == 't')
                            <td>Бор</td>
                            @else
                            <td class="text-danger">Йуқ</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Олд туманга қарши чироқлар -2 та оқ ёки сариқ</th>
                            @if($akts->old_tuman_chiroq_soz == 't')
                            <td>Соз</td>
                            @else
                            <td class="text-danger">Носоз</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Ортга харакатланиш чироғи</th>
                            @if($akts->ort_har_chiroq_soz == 't')
                            <td>Соз</td>
                            @else
                            <td class="text-danger">Носоз</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Олд,орқа ,ёнбош, бурилиш кўрсаткич чироқлри -2 тадан сариқ</th>
                            @if($akts->burilish_chiroq_soz == 't')
                            <td>Соз</td>
                            @else
                            <td class="text-danger">Носоз</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>ЙТХ*(АВРИЯ) вақтида ёқиладиган чироқ –авто сариқ</th>
                            @if($akts->avarinka_chiroq_soz == 't')
                            <td>Соз</td>
                            @else
                            <td class="text-danger">Носоз</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Тoрмоз чироқлар</th>
                            @if($akts->gabarit_chiroq_soz == 't')
                            <td>Соз</td>
                            @else
                            <td class="text-danger">Носоз</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Орқа туманга қарши чироқлар</th>
                            @if($akts->orqa_gabarit_chiroq_bor == 't')
                            <td>Бор</td>
                            @else
                            <td class="text-danger">Йуқ</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Орқа туманга қарши чироқлар</th>
                            @if($akts->orqa_gabarit_chiroq_soz == 't')
                            <td>Соз</td>
                            @else
                            <td class="text-danger">Носоз</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Ҳавфсизлик ёстиқчаларининг мавжудлиги  (ПОДУШКА)</th>
                            @if($akts->xavf_yostiq == 't')
                            <td>Мавжуд</td>
                            @else
                            <td class="text-danger">Мавжуд емас</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Ёритиш ва ёруғлик огохлантириш мосламаларнинг талабларга мувофиқ ўрнатилганлиги.</th>
                            @if($akts->yorit_ogoh_mos == 't')
                            <td>Мувофиқ</td>
                            @else
                            <td class="text-danger">Номувофиқ</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Ёритиш мосламаларининг ёруғлик йўналтиргичларида бузилишларнинг мавжуд эмаслиги.</th>
                            @if($akts->yorug_yunaltirgich == 't')
                            <td>Мавжуд емас</td>
                            @else
                            <td class="text-danger">Мавжуд</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Ойна тозалагич ва ювгичларнинг ишга яроқлилиги. (ЩЁТКА)</th>
                            @if($akts->oyna_tozalagich == 't')
                            <td>Соз</td>
                            @else
                            <td class="text-danger">Носоз</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Ёқилғи идиши(бак)нинг беркитиш қурилмаси ва қопқоғининг ишга лаёқатлилиги. (БЕНЗОБАК)</th>
                            @if($akts->benzobak_yaroq == 't')
                            <td>Соз</td>
                            @else
                            <td class="text-danger">Носоз</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Чамбарак ишланма(руль конструкция)сида кўзда тутилмаган,ғилдиракларнинг айланишини чеклайдиган мослама,хамда руль валига махкамланган ва ўрнатилган қурилмаларнинг мавжуд эмаслиги.</th>
                            @if($akts->chambarak_rul == 't')
                            <td>Мавжуд емас</td>
                            @else
                            <td class="text-danger">Мавжуд</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>АТВ-нинг эшик қулуфлари,кабинааги ўриндикларнинг мослаштириш қурилмалари ва меанизмлари,пешойна қуритиш ва иситиш қурилмалари,ўғирликка қарши химоя тизимларининг ишлаши.</th>
                            @if($akts->eshik_qulf == 't')
                            <td>Соз</td>
                            @else
                            <td class="text-danger">Носоз</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Бампернинг ташқи кисмини намоён килувчи эгилиш радиусининг муофиклиги. (БАМПЕР)</th>
                            @if($akts->bamper_egil_radius == 't')
                            <td>Мувофиқ</td>
                            @else
                            <td class="text-danger">Номувофиқ</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Электр ўтказгичлардаги ташқи нуқсон(дефект)ларнинг мавжуд эмаслиги.(ПРАВОДКА)</th>
                            @if($akts->elektr_tashqi_nuq == 't')
                            <td>Мавжуд емас</td>
                            @else
                            <td class="text-danger">Мавжуд</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Алохида қисмларнинг конструкцияга махкамланиши (захирадаги ғилдирак,аккумулятор батареяси,ўриндиқлар, амартизатор).</th>
                            @if($akts->aloxida_qism_kons == 't')
                            <td>Махкамланган</td>
                            @else
                            <td class="text-danger">Махкамланмаган</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Кузовда ва харакатланиш қисмларида занг(коррозия)нинг мавжуд эмаслги(эшиклар, эшик остки қисми(парог),АТВ фартуги ва ғилдирак устки канотлари.</th>
                            @if($akts->kuzov_zang == 't')
                            <td>Мавжуд емас</td>
                            @else
                            <td class="text-danger">Мавжуд</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Гулишитрда (тешиклар), ёриқлар, синишлар мавжудлиги</th>
                            @if($akts->gulishetil_sinish == 't')
                            <td>Мавжуд емас</td>
                            @else
                            <td class="text-danger">Мавжуд</td>
                            @endif
                        </tr>

                        {{-- 2 -chi post --}}

                        <tr class="text-left">
                            <th>Руль коклонкасида кўндаланг ва ўқ бўйлаб люфтларнинг йўқлиги ва руль калонкаси махкамланишининг созлиги.</th>
                            @if($akts->rul_kalonka_soz == 't')
                            <td>Соз</td>
                            @else
                            <td class="text-danger">Носоз</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Бузилишлар ,дефармация қолдиғи излари,ёриқлар ва бошқа нуқсонларнинг мавжуд эмаслиги , руль колонкаси эхтиёт қисмарнинг руль бошқаруви ва механизмининг картери тўлиқ ўрнатилганлиги.</th>
                            @if($akts->rul_kalonka_mexanizm == 't')
                            <td>Соз</td>
                            @else
                            <td class="text-danger">Носоз</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Руль  бошқауви гидротизимида зич(герметик)лик ва суюқликнинг меъёр даражасида бўлиши.</th>
                            @if($akts->rul_boshqaruv_miyor == 't')
                            <td>Мувофиқ</td>
                            @else
                            <td class="text-danger">Номувофиқ</td>
                            @endif
                        </tr>
                         <tr class="text-left">
                            <th>Руль бошқармаси кучай тиргичининг иш қобилияти . Руль ғилдираги ўнга чапга бурилишида кучайтириш ўзгаришининг силлиқлиги.</th>
                            @if($akts->rul_kuchaytir_ish_qob == 't')
                            <td>Соз</td>
                            @else
                            <td class="text-danger">Носоз</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Двигатеь ишлаётган барқарор (нейтрал) холатда бошқарилаёган руль ғилдираги кучайтиргичининг ўз-ўзидан бурилмаслигини таъминлаш.</th>
                            @if($akts->dvigat_ish_barqaror == 't')
                            <td>Соз</td>
                            @else
                            <td class="text-danger">Носоз</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Руль бошқарувида унинг жами (оралиқдаги бўшлиқ) люфт чегара қийматининг ошмаслигини таъминлаш.</th>
                            @if($akts->lift_cheg_qiymat == 't')
                            <td>Соз</td>
                            @else
                            <td class="text-danger">Носоз</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Жами   люфт - 10° дан ошмаслиги. (ИСЛМ)</th>
                            @if($akts->lyuft_qiymat <= 10)
                            <td>{{$akts->lyuft_qiymat}}°</td>
                            @else
                            <td class="text-danger">{{$akts->lyuft_qiymat}}°</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Юқори вал айланиш частотаси 2500 ... 2800 об мин: (бензин)</th>
                            @if($akts->benzin_yuq_val_chas >= 0.7)
                            <td>{{$akts->benzin_yuq_val_chas}} %</td>
                            @else
                            <td class="text-danger">{{$akts->benzin_yuq_val_chas}} %</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Енг паст вал айланиш частотаси об мax: (бензин)</th>
                            @if($akts->benzin_pas_val_chas <= 1)
                            <td>{{$akts->benzin_pas_val_chas}} %</td>
                            @else
                            <td class="text-danger">{{$akts->benzin_pas_val_chas}} %</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Юқори вал айланиш частотаси 2500 ... 2800 об мин: (Газ)</th>
                            @if($akts->gaz_yuq_val_chas >= 0.7)
                            <td>{{$akts->gaz_yuq_val_chas}} %</td>
                            @else
                            <td class="text-danger">{{$akts->gaz_yuq_val_chas}} %</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Енг паст вал айланиш частотаси об мax: (Газ)</th>
                            @if($akts->gaz_pas_val_chas <= 1)
                            <td>{{$akts->gaz_pas_val_chas}} %</td>
                            @else
                            <td class="text-danger">{{$akts->gaz_pas_val_chas}} %</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>АТВ* дан чиқарилган диель газлардаги тутун даражасининг ўрнатилган талабларга мувофиқлиги (ИЁД*****сиқилишдан ёниш билан)</th>
                            @if($akts->diel_gaz_tutun == 't')
                            <td>Мувофиқ</td>
                            @else
                            <td class="text-danger">Номувофиқ</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Шовқин чиқариш  тизимидаги шовқин даражасининг меъёрларга мувофиқлиги. Шовқин даржаси 91 дБАдан ошмаслиги керак. (ГЛУШИТЕЛЬ)  91дБА</th>
                            @if(-1*($akts->shovqin_umumiy - $akts->tashqi_shovqin) <= 91)
                            <td>{{-1*($akts->shovqin_umumiy - $akts->tashqi_shovqin)}} дБА</td>
                            @else
                            <td class="text-danger">{{-1*($akts->shovqin_umumiy - $akts->tashqi_shovqin)}} дБА</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Ўрнатилган меёрларга кўра товуш даражасига эга бўлган овозли огохлантириш қурилмасиинг мавжудлиги</th>
                            @if($akts->ovozli_ogoh_quril == 't')
                            <td>Мавжуд</td>
                            @else
                            <td class="text-danger">Мавжуд емас</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Ўрнатилган меёрларга кўра товуш даражасига эга бўлган овозли огохлантиргичнинг ишлаш қобилияти 90 дБА дан кам бўлмаслиги керак.</th>
                            @if($akts->signal_qobil >= 90)
                            <td>{{$akts->signal_qobil}} дБА</td>
                            @else
                            <td class="text-danger">{{$akts->signal_qobil}} дБА</td>
                            @endif
                        </tr>

                        {{-- 3-post --}}

                        <tr class="text-left">
                            <th>Тормоз узатиш қисм(элемент)ларида занг(коррозия),механик шикастланишлар,ёриқлар,нуксон(деформация)лар қолдиғи,қуврлар ёки бўғинлар зич(геметик)лигининг бузилиши,тормоз суюқлиги оқишининг мавжуд эмаслиги</th>
                            @if($akts->tormoz_uzatish_qism == 't')
                            <td>Соз</td>
                            @else
                            <td class="text-danger">Носоз</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Ғилдиракарнинг тормоз қисмидаги механизмда механик шикастланишлар ,ёриқлар,нуқсонлар(деформациялар),мойлаш ашё(материал)лари ва тормоз суюқлиги билан ифлосланиши мавжуд эмаслиги.</th>
                            @if($akts->gildirak_tor_mex == 't')
                            <td>Мавжуд емас</td>
                            @else
                            <td class="text-danger">Мавжуд</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Босим остида тормоз шлангларининг  шишиши,ёриқлар ва кўринадиган едирилиш, силлиқ жойларнинг мавжуд эмаслиги.</th>
                            @if($akts->bosim_tor_shikas == 't')
                            <td>Мавжуд емас</td>
                            @else
                            <td class="text-danger">Мавжуд</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Осма ва узатиш карданлардаги болтли уланмаларнинг мустахкамлиги.</th>
                            @if($akts->osma_uzat_kar == 't')
                            <td>Соз</td>
                            @else
                            <td class="text-danger">Носоз</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Тезликни ва босиб ўтилган йўлни ўлчаш қурилмасининг ишлаши. (СПИДОМЕТР)</th>
                            @if($akts->tezla_spidometr == 't')
                            <td>Соз</td>
                            @else
                            <td class="text-danger">Носоз</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Ишчи тормоз тизимининг тормозланиш самарадорлиги 490 Н</th>
                            @if($akts->tormoz_sam <= 490)
                            <td>{{$akts->tormoz_sam}} Н</td>
                            @else
                            <td class="text-danger">{{$akts->tormoz_sam}} Н</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Ишчи тормоз тизимининг барқарорлиги 1-ўқга - 0,53%  2-ўқга -0,53%</th>
                            @if($akts->uq_barqar >= 0.53)
                            <td>{{$akts->uq_barqar}} %</td>
                            @else
                            <td class="text-danger">{{$akts->uq_barqar}} %</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Ишчи тормоз тизимининг созлиги</th>
                            @if($akts->tor_tizm_samara == 't')
                            <td>Соз</td>
                            @else
                            <td class="text-danger">Носоз</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>АТВ*нинг ўқлари бўйлаб тормоз кучларининг рухсат этилган нотекислигининг мувофиқлиги. 1 -ўқга - 15%</th>
                            @if($akts->birinchi_uq_bar <= 15)
                            <td>{{$akts->birinchi_uq_bar}} %</td>
                            @else
                            <td class="text-danger">{{$akts->birinchi_uq_bar}} %</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>АТВ*нинг ўқлари бўйлаб тормоз кучларининг рухсат этилган нотекислигининг мувофиқлиги. 2 - ўқга - 20%</th>
                            @if($akts->ikkinch_uq_bar <= 20)
                            <td>{{$akts->ikkinch_uq_bar}} %</td>
                            @else
                            <td class="text-danger">{{$akts->ikkinch_uq_bar}} %</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>АТВ*нинг ўқлари бўйлаб тормоз кучларининг рухсат этилган нотекислигининг мувофиқлиги</th>
                            @if($akts->uq_by_barqa == 't')
                            <td>Мувофиқ</td>
                            @else
                            <td class="text-danger">Мувофиқ емас</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Автотураргохда тормозланиш самарадорлиги - 0,16 дан кам бўлмаслиги.</th>
                            @if($akts->turar_tor_sam >= 0.16)
                            <td>{{$akts->turar_tor_sam}}</td>
                            @else
                            <td class="text-danger">{{$akts->turar_tor_sam}}</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th> Бошқарув органидаги кучи 392 Н ошмаслиги керак</th>
                            @if($akts->boshqar_org_kuch <= 392)
                            <td>{{$akts->boshqar_org_kuch}} Н</td>
                            @else
                            <td class="text-danger">{{$akts->boshqar_org_kuch}} Н</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Автотураргохда тормозланиш самарадорлиги ва органидаги кучи созлиги</th>
                            @if($akts->tormz_sam == 't')
                            <td>Соз</td>
                            @else
                            <td class="text-danger">Носоз</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>Газ балон хақидаги маьлумотноманинг мавжудлиги. (АКТ ОПРЕСОВКИ)</th>
                            @if($akts->gaz_balon_mavjud == 't')
                            <td>Мавжуд</td>
                            @else
                            <td class="text-danger">Мавжуд емас</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th>СТГ жамланма(агрегат)ларининг уланиш тизимларининг зичлиги(герметик)лиги ва мустахкамлиги.1,0МРа босим остида СТГ тизимиринг бутунлигини текшириш.Электромагнит қопқоғининг ишлаши бутунлигини текшириш.СТГ уланиш тизимларининг ишончлилигини синовдан ўтказиш(зичлаштириш)2.5; 4.9;  9,8;ва 19,6 МРа босим остида уланган бўғимларни мустахкамлигини
                                текширувдан ўтказиш.Хавони суриб олиш(ваккумлаштириш)ишларини ўтказиш</th>
                            @if($akts->stg_agregat == 't')
                            <td>Соз</td>
                            @else
                            <td class="text-danger">Носоз</td>
                            @endif
                        </tr>
                        <tr class="text-left">
                            <th >СНГ(ПРОПАН) жамланма(агрегатларининг уланиш тизимларининг зичлиги(герметик )лиги,1,6МРа босм остида СНГ тизимларини бутунигини текшириш.Ваккумлаштириш ишларини ўтказиш.</th>
                            @if($akts->sng_propan == 't')
                            <td>Соз</td>
                            @else
                            <td class="text-danger">Носоз</td>
                            @endif
                        </tr>
                    </table>
               </div>
               <div class="container mt-5 w-100">
                    <div class="shadow card w-100">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Image Uploading</h4>
                        </div>
                        <div class="card-body d-flex flex-wrap justify-content-center" id="container">
                            @foreach($imag as $img)
                            <div class="image_container d-flex justify-content-center position-relative">
                                <img src="/image/{{$img->image}}" alt="Image">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="blade" class="show">
            <div class="bladeWin d-flex justify-content-center align-items-center" >
                <div class="card ">
                    <div class="card-header px-5 position-relative">
                        <h5>Enter your password</h5>
                        <span id="time" class="text-danger position-absolute time">&times</span>
                    </div>
                    <div class="card-body px-4">
                        <form action="/pass_check" method="get">
                            @csrf
                            <label for="pass" class="form-label m-0 p-0">Password</label>
                            <input class="form-control " style="width:280px;" type="password" name="password" id="pass" >
                            <input class="form-control" type="text" hidden name="get_id" value="{{$akts->users_id}}">
                            <div class="d-flex justify-content-end">
                                <button type="submit" class=" btn btn-success  mt-3 ">Allow</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @if(Session::get('fail'))
            <div id="incorect">
                <div class="bladeWin d-flex justify-content-center align-items-center" >
                    <div class="card ">
                        <div class="card-header px-5 position-relative">
                            <h5>Enter your password</h5>
                            <span id="timess" class="text-danger position-absolute time">&times</span>
                        </div>
                        <div class="card-body px-4">
                            <form action="/pass_check" method="get">
                                @csrf
                                <label for="pass" class="form-label m-0 p-0">Password</label>
                                <input class="form-control " style="width:280px;" type="password" name="password" id="pass" >

                                    <div class="alert alert-danger mt-2 p-2">
                                        <span class="text-black" style="font-size: 12px;">
                                            {{Session::get('fail')}}
                                        </span>
                                    </div>
                                <input class="form-control" type="text" hidden name="get_id" value="{{$akts->users_id}}">
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class=" btn btn-success  mt-3 ">Allow</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <style>
            tr, th{
                font-size: 14px;
            }
            .bladeWin{
                width:100%;
                height: 100vh;
                position: fixed;
                top: 0;
                left:0;
                background-color:rgba(132, 132, 132,0.5);
            }
            .show{
                display:none;
            }
            .passShow{
                display: block;
            }
            .time{
                top: 0px;
                right: 10px;
                font-size: 22px;
                cursor: pointer;
            }
            .image_container{
            height: 170px;
		 	width: 230px;
		 	border-radius: 6px;
		 	overflow: hidden;
		 	margin: 10px;
        }
        .image_container img {
		 	height: 100%;
		 	width: auto;
		 	object-fit: cover;
		 }
		 .image_container span {
		 	top: -6px;
		 	right: 8px;
		 	color: red;
		 	font-size: 28px;
		 	font-weight: normal;
		 	cursor: pointer;
		 }
        </style>
        <script>
            function show(){
                const passBlade = document.getElementById('blade');
                passBlade.classList.add('passShow');
            }
            var close = document.getElementById('time');
            close.addEventListener('click', function(){
                let passBlade = document.getElementById('blade');
                passBlade.classList.remove('passShow');
            });
            var closes = document.getElementById('timess');
            closes.addEventListener('click', function(){
                let incorect = document.getElementById('incorect');
                incorect.classList.add('show');
            });
            function printed() {
                const prtHtml = document.getElementById('print').innerHTML
                let stylesHtml = ''
                for (const node of [...document.querySelectorAll('link[rel="stylesheet"], style')]) {
                    stylesHtml += node.outerHTML
                }
                const WinPrint = window.open('', '', 'left=0,top=0,width=1200,height=800,toolbar=0,scrollbars=0,status=0')
                WinPrint.document.write(`<!DOCTYPE html>
                    <html>
                        <head>
                        ${stylesHtml}
                        </head>
                        <body>
                        <div>
                            ${prtHtml}
                        </div>
                        </body>
                    </html>`)
                WinPrint.document.close()
                WinPrint.focus()
                WinPrint.print()
                setTimeout(function () {
                    WinPrint.close()
                }, 1000)
            }
        </script>
    </x-app-layout>
