@extends('bootstrap')
<link rel="stylesheet" href="{{url('css/client.css')}}">
<link rel="stylesheet" href="{{url('css/planshit.css')}}">
<script type="text/javascript" src="{{url('js/test.js')}}"></script>
<script src="{{url('js/client.js')}}"></script>
    <x-app-layout>

    <div class="">
        <div class="list_title ">
            <h2>Planshit send</h2>
        </div>
        <div class="">
            <div class="bg-white overflow-hidden shadow-xl ">
            <div class="p-3 max-w-7xl mx-auto mb-5"  >
                <div  class="my-5">
                    <div class="row">
                        <div class="col-3">
                            <label for="input1" class="form-label m-0 p-0">Familiyasi Ismi Sharifi</label>
                            <input type="text" class="form-control" value="{{$plan_cli->name}}" id="input1" placeholder="">
                        </div>
                        <div class="col-3">
                            <label for="input2" class="form-label m-0 p-0">Davlat raqami</label>
                            <input type="text" class="form-control" value="{{$plan_cli->d_raqami}}" id="input2" placeholder="">
                        </div>
                        <div class="col-3">
                            <label for="input3" class="form-label m-0 p-0">Dvigatel raqami</label>
                            <input type="text" class="form-control" value="{{$plan_cli->dv_raqami}}" id="input3" placeholder="">
                        </div>
                        <div class="col-3">
                            <label for="input4" class="form-label m-0 p-0">Rusumi</label>
                            <input type="text" class="form-control" value="{{$plan_cli->rusumi}}" id="input4" placeholder="">
                        </div>
                        <div class="col-3 mt-3">
                            <label for="input5" class="form-label m-0 p-0">Rangi</label>
                            <input type="text" class="form-control" value="{{$plan_cli->rangi}}" id="input5" placeholder="">
                        </div>
                        <div class="col-3 mt-3">
                            <label for="input6" class="form-label m-0 p-0">Texnik pasporti</label>
                            <input type="text" class="form-control" value="{{$plan_cli->texnik_pass}}" id="input6" placeholder="">
                        </div>
                    </div>
                </div>
                <form action="/add_planshit"  method="post" enctype="multipart/form-data" class="planshit_question">
                    @csrf
                    <div class="text-center mb-3">
                        <h3>1-ПОСТ</h3>
                    </div>
                    <input type="text" class="form-control" hidden name="users_id" value="{{$plan_cli->id}}" id="input0" placeholder="">
                    <div class="d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.1</h6>
                            <h6>Талабларга мувофиқ давлат рақам белгиларининг ўрнатилиши.  Мих парчин (зак) (ГОС. НОМЕР)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" checked type="radio" value="t" {{ old('dav_raq_bel')== "t" ? 'checked' : '' }} name="dav_raq_bel" id="dav_raq_bel1">
                            <label class="form-check-label" for="dav_raq_bel1">
                                Тўғри
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" value="f" {{ old('dav_raq_bel')== "f" ? 'checked' : '' }} name="dav_raq_bel" id="dav_raq_bel2" >
                            <label class="form-check-label" for="dav_raq_bel2">
                                Нотўғри
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex pt-4">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.2</h6>
                            <h6>Биинчи тиббий ёрдам кўрсатиш учун тиббиёт қутисининг мавжудлиги (Аптечка)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" value="t" {{ old('aptechka')== "t" ? 'checked' : '' }} name="aptechka" id="aptechka1" checked>
                            <label class="form-check-label" for="aptechka1">
                                Бор
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" value="f" {{ old('aptechka')== "f" ? 'checked' : '' }} name="aptechka" id="aptechka2" >
                            <label class="form-check-label" for="aptechka2">
                                Йуқ
                            </label>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.3</h6>
                            <h6>Ўрнатилган  талабларга мувофиқ ўт ўчириш мосламасининг мавжудлиги (Ог нетушитель)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" value="t" type="radio" {{ old('ogon')== "t" ? 'checked' : '' }} name="ogon" checked id="ogon1">
                            <label class="form-check-label" for="ogon1">
                                Бор
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" value="f" type="radio" {{ old('ogon')== "f" ? 'checked' : '' }} name="ogon" id="ogon2" >
                            <label class="form-check-label" for="ogon2">
                                Йуқ
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.4</h6>
                            <h6>Йўл транспорт ходисаси (авария) холатида тўхтаб туриш белисининг  мавжудлиги. (Стоп сигнал)(Жилет)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" value="t" {{ old('znak')== "t" ? 'checked' : '' }} type="radio" checked name="znak" id="znak1">
                            <label class="form-check-label" for="znak1">
                                Бор
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" value="f" {{ old('znak')== "f" ? 'checked' : '' }} type="radio" name="znak" id="znak2" >
                            <label class="form-check-label" for="znak2">
                                Йуқ
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.5</h6>
                            <h6>Ўриндиқар созлаш  механизми. (СИДЕНИЯ)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" value="t" {{ old('urindiq')== "t" ? 'checked' : '' }} type="radio" checked name="urindiq" id="urindiq1">
                            <label class="form-check-label" for="urindiq1">
                                Cоз
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" value="f" {{ old('urindiq')== "f" ? 'checked' : '' }} type="radio" name="urindiq" id="urindiq2" >
                            <label class="form-check-label" for="urindiq2">
                                Носоз
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.6</h6>
                            <h6>АТВ*нинг хавфсизлик камарларини соз ҳолатда бўлишини таъминлаш. (Ремень)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" value="t" {{ old('remen')== "t" ? 'checked' : '' }} checked type="radio" name="remen" id="remen1">
                            <label class="form-check-label" for="remen1">
                                Соз
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" value="f" {{ old('remen')== "f" ? 'checked' : '' }} type="radio" name="remen" id="remen2" >
                            <label class="form-check-label" for="remen2">
                                Носоз
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.7</h6>
                            <h6>Талабларга мувофиқ  орқани  кўриш  ойналарининг мавжудлиги.(ОРҚА ОЙНА ВА БАКАВОЙ)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" value="t" {{ old('bakavoy')== "t" ? 'checked' : '' }} type="radio" checked name="bakavoy" id="bakavoy1">
                            <label class="form-check-label" for="bakavoy1">
                                Мавжуд
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" value="f" {{ old('bakavoy')== "f" ? 'checked' : '' }} type="radio" name="bakavoy" id="bakavoy2">
                            <label class="form-check-label" for="bakavoy2">
                                Мавжуд емас
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.8</h6>
                            <h6>Хайдовчи ўриндиғдан кўринишни чеклайдиган қўшимча нарсалар мавжуд эмаслиги. <br> Олд  пешойнанинг юқори  қисмидаги плёнканинг белгиланган талабларга мувофиқлиги.(14см)</h6>
                        </div>
                        <div class="ml-4  javob">
                            <div class="d-flex">
                                <div class="form-check">
                                    <input class="form-check-input" value="f" {{ old('qushimcha')== "f" ? 'checked' : '' }} type="radio" name="qushimcha" id="qushimcha1">
                                    <label class="form-check-label" for="qushimcha1">
                                        Мавжуд
                                    </label>
                                </div>
                                <div class="form-check ml-3">
                                    <input class="form-check-input" value="t" {{ old('qushimcha')== "t" ? 'checked' : '' }} type="radio" name="qushimcha" id="qushimcha2" checked>
                                    <label class="form-check-label" for="qushimcha2">
                                        Мавжуд емас
                                    </label>
                                </div>
                            </div>
                            <div class=" mt-2 d-flex">
                                <label for="plyonka">Плёнканинг размери:</label>
                                <input type="text"  class="form-control ml-2" value="{{old('plyonka_size')}}" name="plyonka_size" min="0" style="width:75px; height: 25px;" id="plyonka" placeholder="...см">
                                <span style="color:red; font-size: 14px;">@error('plyonka_size'){{'Empty'}} @enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.9</h6>
                            <h6>Пешойнада хайдовчининг ойна артгич худудида ёриқлар ва синган чизиқларнинг йўқлиги (ТРЕЩИНА)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" value="f" {{ old('treshina_peshoyna')== "f" ? 'checked' : '' }} type="radio" name="treshina_peshoyna" id="treshina_peshoyna1">
                            <label class="form-check-label" for="treshina_peshoyna1">
                                Бор
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" value="t" {{ old('treshina_peshoyna')== "t" ? 'checked' : '' }} type="radio" name="treshina_peshoyna" id="treshina_peshoyna2" checked>
                            <label class="form-check-label" for="treshina_peshoyna2">
                                Йуқ
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.10</h6>
                            <h6>Пешойна тозалагичи, сув пуркагичлар ва қуёшга қарши пештахта (соябон) нинг борлиги (СОЯБОН)</h6>
                        </div>
                        <div class=" ml-4  javob">
                                <div class="d-flex">
                                    <label for="">Cув пуркагич: </label>
                                    <div class="form-check ml-3">
                                    <input class="form-check-input" value="t" {{ old('suv_puflagich')== "t" ? 'checked' : '' }} type="radio" name="suv_puflagich" id="suv_puflagich1" checked>
                                    <label class="form-check-label" for="suv_puflagich1">
                                        Бор
                                    </label>
                                    </div>
                                    <div class="form-check ml-3">
                                    <input class="form-check-input"value="f" {{ old('suv_puflagich')== "f" ? 'checked' : '' }} type="radio" name="suv_puflagich" id="suv_puflagich2">
                                    <label class="form-check-label" for="suv_puflagich2">
                                        Йуқ
                                    </label>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <label for="">Cоябон:</label>
                                    <div class="form-check ml-3">
                                    <input class="form-check-input" value="t" {{ old('soyabon')== "t" ? 'checked' : '' }} type="radio" name="soyabon" id="soyabon1" checked>
                                    <label class="form-check-label" for="soyabon1">
                                        Бор
                                    </label>
                                    </div>
                                    <div class="form-check ml-3">
                                    <input class="form-check-input" value="f" {{ old('soyabon')== "f" ? 'checked' : '' }} type="radio" name="soyabon" id="soyabon2">
                                    <label class="form-check-label" for="soyabon2">
                                        Йуқ
                                    </label>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.11</h6>
                            <h6>АТВ*даги шиналар (ғилдираклар)нинг талабларга мувофиқ ўрнатилганлиги. (БИР ХИЛ ЎЛЧАМ)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" value="t" {{ old('shina_talab')== "t" ? 'checked' : '' }} type="radio" name="shina_talab" checked id="shina_talab1">
                            <label class="form-check-label" for="shina_talab1">
                                Мувофиқ
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" value="f" {{ old('shina_talab')== "f" ? 'checked' : '' }} type="radio" name="shina_talab" id="shina_talab2">
                            <label class="form-check-label" for="shina_talab2">
                                Номувофиқ
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.12</h6>
                            <h6>Ғилдиракнинг диски ва ички тўсиқларни махкам қотириш учун барча гайка-болтларнинг мавжудлиги. (БОЛТЛАР)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                                <input class="form-check-input" value="t" {{ old('gayka_bulit')== "t" ? 'checked' : '' }} type="radio" checked name="gayka_bulit" id="gayka_bulit1">
                                <label class="form-check-label" for="gayka_bulit1">
                                    Мавжуд
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input class="form-check-input" value="f" {{ old('gayka_bulit')== "f" ? 'checked' : '' }} type="radio" name="gayka_bulit" id="gayka_bulit2">
                                <label class="form-check-label" for="gayka_bulit2">
                                    Мавжуд емас
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.13</h6>
                            <h6>Ғилдиракларнинг дискаларида ёриқлар бўлмаслиги. (ТРЕШИНА)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" value="f" {{ old('treshina')== "f" ? 'checked' : '' }} type="radio" name="treshina" id="treshina1">
                            <label class="form-check-label" for="treshina1">
                                Бор
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" value="t" {{ old('treshina')== "t" ? 'checked' : '' }} type="radio" name="treshina" id="treshina2" checked>
                            <label class="form-check-label" for="treshina2">
                                Йуқ
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.14</h6>
                            <h6>Дисклардаги қотириш тешикларнинг шакл ва ўлчамларида бузилиш мавжуд эмаслигини таъминлаш.</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                                <input class="form-check-input" value="f" {{ old('disk_qotirish')== "f" ? 'checked' : '' }} type="radio" name="disk_qotirish" id="disk_qotirish1">
                                <label class="form-check-label" for="disk_qotirish1">
                                    Мавжуд
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input class="form-check-input" value="t" {{ old('disk_qotirish')== "t" ? 'checked' : '' }} type="radio" name="disk_qotirish" id="disk_qotirish2" checked>
                                <label class="form-check-label" for="disk_qotirish2">
                                    Мавжуд емас
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.15</h6>
                            <h6>Шиналардан фойдаланишда нуқсонларнинг мавжуд эмаслигини ва уларнинг ўлчамларини кўриш. 1.6-4.мм </h6>
                        </div>
                        <div class="ml-4  javob">
                            <div class="d-flex">
                                <div class="form-check">
                                    <input class="form-check-input" value="f" {{ old('shina')== "f" ? 'checked' : '' }} type="radio" name="shina" id="shina1">
                                    <label class="form-check-label" for="shina1">
                                        Нуқсонлар мавжуд
                                    </label>
                                </div>
                                <div class="form-check ml-3">
                                    <input class="form-check-input" value="t" {{ old('shina')== "t" ? 'checked' : '' }} type="radio" name="shina" id="shina2" checked>
                                    <label class="form-check-label" for="shina2">
                                        Нуқсонлар мавжуд емас
                                    </label>
                                </div>
                            </div>
                            <div class=" mt-2 d-flex">
                                <label for="shina_ulcham">Шина ўлчамлари:</label>
                                <input type="text"  class="form-control ml-3" name="shinalar_ulcham" value="{{old('shinalar_ulcham')}}" style="width:75px; height: 25px;" id="shina_ulcham" placeholder="...мм">
                                <span style="color:red; font-size: 14px;">@error('shinalar_ulcham'){{'Empty'}} @enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.16</h6>
                            <h6>АТВ*нинг ғилдиракдаги босим кўрсаткичларининг бирхиллигини таъминлаш. (2.2-2.4.)BAR</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                                <input class="form-check-input" value="t" {{ old('gildirak_bosim')== "t" ? 'checked' : '' }} type="radio"  checked name="gildirak_bosim" id="gildirak_bosim1">
                                <label class="form-check-label" for="gildirak_bosim1">
                                    Бирхил
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input class="form-check-input" value="f" {{ old('gildirak_bosim')== "f" ? 'checked' : '' }} type="radio" name="gildirak_bosim" id="gildirak_bosim2">
                                <label class="form-check-label" for="gildirak_bosim2">
                                    Бирхил емас
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.17</h6>
                            <h6>Узоқни  ёритувчи чироқлар – 2та оқ</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check ">
                            <input class="form-check-input" type="radio" value="t" {{ old('uzoq_chiroq_soz')== "t" ? 'checked' : '' }} name="uzoq_chiroq_soz" checked id="uzoq_chiroq_soz1">
                            <label class="form-check-label" for="uzoq_chiroq_soz1">
                                Соз
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" value="f" {{ old('uzoq_chiroq_soz')== "f" ? 'checked' : '' }} name="uzoq_chiroq_soz" id="uzoq_chiroq_soz2">
                            <label class="form-check-label" for="uzoq_chiroq_soz2">
                                Носоз
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.18</h6>
                            <h6>Яқинни ёритувчи чироқлар -2 та оқ</h6>
                        </div>
                        <div class="d-flex ml-4 javob">
                            <div class="form-check">
                            <input class="form-check-input" value="t" {{ old('yaqin_chiroq_soz')== "t" ? 'checked' : '' }} type="radio" checked  name="yaqin_chiroq_soz" id="yaqin_chiroq_soz1">
                            <label class="form-check-label" for="yaqin_chiroq_soz1">
                                Соз
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" value="f" {{ old('yaqin_chiroq_soz')== "f" ? 'checked' : '' }} type="radio" name="yaqin_chiroq_soz" id="yaqin_chiroq_soz2">
                            <label class="form-check-label" for="yaqin_chiroq_soz2">
                                Носоз
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.19</h6>
                            <h6>Олд туманга қарши чироқлар -2 та оқ ёки сариқ </h6>
                        </div>
                        <div class=" ml-4  javob">
                            <div class="d-flex">
                                <div class="form-check">
                                <input class="form-check-input" value="t" {{ old('old_tuman_chiroq_bor')== "t" ? 'checked' : '' }} type="radio" name="old_tuman_chiroq_bor" checked id="old_tuman_chiroq_bor1">
                                <label class="form-check-label" for="old_tuman_chiroq_bor1">
                                    Бор
                                </label>
                                </div>
                                <div class="form-check ml-3">
                                <input class="form-check-input" value="f" {{ old('old_tuman_chiroq_bor')== "f" ? 'checked' : '' }} type="radio" name="old_tuman_chiroq_bor" id="old_tuman_chiroq_bor2">
                                <label class="form-check-label" for="old_tuman_chiroq_bor2">
                                    Йуқ
                                </label>
                                </div>
                            </div>
                            <div  class="d-flex mt-2">
                                <div class="form-check ">
                                <input class="form-check-input" type="radio" value="t" {{ old('old_tuman_chiroq_soz')== "t" ? 'checked' : '' }} name="old_tuman_chiroq_soz" checked id="old_tuman_chiroq_soz1">
                                <label class="form-check-label" for="old_tuman_chiroq_soz1">
                                    Соз
                                </label>
                                </div>
                                <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" value="f" {{ old('old_tuman_chiroq_soz')== "f" ? 'checked' : '' }} name="old_tuman_chiroq_soz" id="old_tuman_chiroq_soz2">
                                <label class="form-check-label" for="old_tuman_chiroq_soz2">
                                    Носоз
                                </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.20</h6>
                            <h6> Ортга харакатланиш чироғи</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check ">
                            <input class="form-check-input" type="radio" value="t" {{ old('ort_har_chiroq_soz')== "t" ? 'checked' : '' }} checked name="ort_har_chiroq_soz" id="ort_har_chiroq_soz1">
                            <label class="form-check-label" for="ort_har_chiroq_soz1">
                                Соз
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" value="f" {{ old('ort_har_chiroq_soz')== "f" ? 'checked' : '' }} name="ort_har_chiroq_soz" id="ort_har_chiroq_soz2">
                            <label class="form-check-label" for="ort_har_chiroq_soz2">
                                Носоз
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.21</h6>
                            <h6>Олд,орқа ,ёнбош, бурилиш кўрсаткич чироқлри -2 тадан сариқ</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" value="t" {{ old('burilish_chiroq_soz')== "t" ? 'checked' : '' }} name="burilish_chiroq_soz"  checked id="burilish_chiroq_soz1">
                            <label class="form-check-label" for="burilish_chiroq_soz1">
                                Соз
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" value="f" {{ old('burilish_chiroq_soz')== "f" ? 'checked' : '' }} name="burilish_chiroq_soz" id="burilish_chiroq_soz2">
                            <label class="form-check-label" for="burilish_chiroq_soz2">
                                Носоз
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.22</h6>
                            <h6> ЙТХ*(АВРИЯ) вақтида ёқиладиган чироқ –авто сариқ</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check ">
                            <input class="form-check-input" value="t" {{ old('avarinka_chiroq_soz')== "t" ? 'checked' : '' }} type="radio" name="avarinka_chiroq_soz" checked id="avarinka_chiroq_soz1">
                            <label class="form-check-label" for="avarinka_chiroq_soz1">
                                Соз
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" value="f" {{ old('avarinka_chiroq_soz')== "f" ? 'checked' : '' }} type="radio" name="avarinka_chiroq_soz" id="avarinka_chiroq_soz2">
                            <label class="form-check-label" for="avarinka_chiroq_soz2">
                                Носоз
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.23</h6>
                            <h6>Тoрмоз чироқлар </h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check ">
                            <input class="form-check-input" type="radio" value="t" {{ old('gabarit_chiroq_soz')== "t" ? 'checked' : '' }} name="gabarit_chiroq_soz" checked id="gabarit_chiroq_soz1">
                            <label class="form-check-label" for="gabarit_chiroq_soz1">
                                Соз
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" value="f" {{ old('gabarit_chiroq_soz')== "f" ? 'checked' : '' }} name="gabarit_chiroq_soz" id="gabarit_chiroq_soz2">
                            <label class="form-check-label" for="gabarit_chiroq_soz2">
                                Носоз
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.24</h6>
                            <h6>Орқа туманга қарши чироқлар  </h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" value="t" {{ old('orqa_gabarit_chiroq_bor')== "t" ? 'checked' : '' }} name="orqa_gabarit_chiroq_bor" checked id="orqa_gabarit_chiroq_bor1">
                            <label class="form-check-label" for="orqa_gabarit_chiroq_bor1">
                                Бор
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" value="f" {{ old('orqa_gabarit_chiroq_bor')== "f" ? 'checked' : '' }} name="orqa_gabarit_chiroq_bor" id="orqa_gabarit_chiroq_bor2">
                            <label class="form-check-label" for="orqa_gabarit_chiroq_bor2">
                                Йуқ
                            </label>
                            </div>
                            <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" value="t" {{ old('orqa_gabarit_chiroq_soz')== "t" ? 'checked' : '' }} name="orqa_gabarit_chiroq_soz" checked id="orqa_gabarit_chiroq_soz1">
                            <label class="form-check-label" for="orqa_gabarit_chiroq_soz1">
                                Соз
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" value="f" {{ old('orqa_gabarit_chiroq_soz')== "f" ? 'checked' : '' }}  name="orqa_gabarit_chiroq_soz" id="orqa_gabarit_chiroq_soz2">
                            <label class="form-check-label" for="orqa_gabarit_chiroq_soz2">
                                Носоз
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.25</h6>
                            <h6>Ҳавфсизлик ёстиқчаларининг мавжудлиги  (ПОДУШКА)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="t" {{ old('xavf_yostiq')== "t" ? 'checked' : '' }} checked name="xavf_yostiq" id="xavf_yostiq1">
                                <label class="form-check-label" for="xavf_yostiq1">
                                    Мавжуд
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" value="f" {{ old('xavf_yostiq')== "f" ? 'checked' : '' }} name="xavf_yostiq" id="xavf_yostiq2">
                                <label class="form-check-label" for="xavf_yostiq2">
                                    Мавжуд емас
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.26</h6>
                            <h6>Ёритиш ва ёруғлик огохлантириш мосламаларнинг талабларга мувофиқ ўрнатилганлиги.</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" value="t" {{ old('yorit_ogoh_mos')== "t" ? 'checked' : '' }} type="radio" name="yorit_ogoh_mos" checked id="yorit_ogoh_mos1">
                            <label class="form-check-label" for="yorit_ogoh_mos1">
                                Мувофиқ
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" value="f" {{ old('yorit_ogoh_mos')== "f" ? 'checked' : '' }} type="radio" name="yorit_ogoh_mos" id="yorit_ogoh_mos2">
                            <label class="form-check-label" for="yorit_ogoh_mos2">
                                Номувофиқ
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.27</h6>
                            <h6>Ёритиш мосламаларининг ёруғлик йўналтиргичларида бузилишларнинг мавжуд эмаслиги.</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="f" {{ old('yorug_yunaltirgich')== "f" ? 'checked' : '' }} name="yorug_yunaltirgich" id="yorug_yunaltirgich1">
                                <label class="form-check-label" for="yorug_yunaltirgich1">
                                    Мавжуд
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" value="t" {{ old('yorug_yunaltirgich')== "t" ? 'checked' : '' }} name="yorug_yunaltirgich" id="yorug_yunaltirgich2" checked>
                                <label class="form-check-label" for="yorug_yunaltirgich2">
                                    Мавжуд емас
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.28</h6>
                            <h6>Ойна тозалагич ва ювгичларнинг ишга яроқлилиги. (ЩЁТКА)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" value="t" {{ old('oyna_tozalagich')== "t" ? 'checked' : '' }} type="radio" checked name="oyna_tozalagich" id="oyna_tozalagich1">
                            <label class="form-check-label" for="oyna_tozalagich1">
                                Соз
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" value="f" {{ old('oyna_tozalagich')== "f" ? 'checked' : '' }} type="radio" name="oyna_tozalagich" id="oyna_tozalagich2">
                            <label class="form-check-label" for="oyna_tozalagich2">
                                Носоз
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.29</h6>
                            <h6>Ёқилғи идиши(бак)нинг беркитиш қурилмаси ва қопқоғининг ишга лаёқатлилиги. (БЕНЗОБАК)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" value="t" {{ old('benzobak_yaroq')== "t" ? 'checked' : '' }} type="radio" name="benzobak_yaroq" checked id="benzobak_yaroq1">
                            <label class="form-check-label" for="benzobak_yaroq1">
                                Соз
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" value="f" {{ old('benzobak_yaroq')== "f" ? 'checked' : '' }} type="radio" name="benzobak_yaroq" id="benzobak_yaroq2">
                            <label class="form-check-label" for="benzobak_yaroq2">
                                Носоз
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.30</h6>
                            <h6>Чамбарак ишланма(руль конструкция)сида кўзда тутилмаган,ғилдиракларнинг айланишини чеклайдиган мослама,хамда руль валига махкамланган ва ўрнатилган қурилмаларнинг мавжуд эмаслиги. </h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                                <input class="form-check-input" value="f" {{ old('chambarak_rul')== "f" ? 'checked' : '' }} type="radio" name="chambarak_rul" id="chambarak_rul1">
                                <label class="form-check-label" for="chambarak_rul1">
                                    Мавжуд
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input class="form-check-input" value="t" {{ old('chambarak_rul')== "t" ? 'checked' : '' }} type="radio" name="chambarak_rul" id="chambarak_rul2" checked>
                                <label class="form-check-label" for="chambarak_rul2">
                                    Мавжуд емас
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.31</h6>
                            <h6>АТВ-нинг эшик қулуфлари,кабинааги ўриндикларнинг мослаштириш қурилмалари ва меанизмлари,пешойна қуритиш ва иситиш қурилмалари,ўғирликка қарши химоя тизимларининг ишлаши.</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" value="t" {{ old('eshik_qulf')== "t" ? 'checked' : '' }} type="radio" name="eshik_qulf" checked id="eshik_qulf1">
                            <label class="form-check-label" for="eshik_qulf1">
                                Соз
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" value="f" {{ old('eshik_qulf')== "f" ? 'checked' : '' }} type="radio" name="eshik_qulf" id="eshik_qulf2">
                            <label class="form-check-label" for="eshik_qulf2">
                                Носоз
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.32</h6>
                            <h6>Бампернинг ташқи кисмини намоён килувчи эгилиш радиусининг муофиклиги. (БАМПЕР)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                                <input class="form-check-input" value="t" {{ old('bamper_egil_radius')== "t" ? 'checked' : '' }} type="radio" checked name="bamper_egil_radius" id="bamper_egil_radius1">
                                <label class="form-check-label" for="bamper_egil_radius1">
                                    Мувофиқ
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input class="form-check-input" value="f" {{ old('bamper_egil_radius')== "f" ? 'checked' : '' }} type="radio" name="bamper_egil_radius" id="bamper_egil_radius2">
                                <label class="form-check-label" for="bamper_egil_radius2">
                                    Мувофиқ емас
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.33</h6>
                            <h6>Электр ўтказгичлардаги ташқи нуқсон(дефект)ларнинг мавжуд эмаслиги.(ПРАВОДКА)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="f" {{ old('elektr_tashqi_nuq')== "f" ? 'checked' : '' }} name="elektr_tashqi_nuq" id="elektr_tashqi_nuq1">
                                <label class="form-check-label" for="elektr_tashqi_nuq1">
                                    Мавжуд
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" value="t" {{ old('elektr_tashqi_nuq')== "t" ? 'checked' : '' }} name="elektr_tashqi_nuq" id="elektr_tashqi_nuq2" checked>
                                <label class="form-check-label" for="elektr_tashqi_nuq2">
                                    Мавжуд емас
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.34</h6>
                            <h6>Алохида қисмларнинг конструкцияга махкамланиши (захирадаги ғилдирак,аккумулятор батареяси,ўриндиқлар, амартизатор).</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="t" {{ old('aloxida_qism_kons')== "t" ? 'checked' : '' }} name="aloxida_qism_kons" checked id="aloxida_qism_kons1">
                                <label class="form-check-label" for="aloxida_qism_kons1">
                                    Махкамланган
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" value="f" {{ old('aloxida_qism_kons')== "f" ? 'checked' : '' }} name="aloxida_qism_kons" id="aloxida_qism_kons2">
                                <label class="form-check-label" for="aloxida_qism_kons2">
                                    Махкамланмаган
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.35</h6>
                            <h6>Кузовда ва харакатланиш қисмларида занг(коррозия)нинг мавжуд эмаслги(эшиклар, эшик остки қисми(парог),АТВ фартуги ва ғилдирак устки канотлари.</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="f" {{ old('kuzov_zang')== "f" ? 'checked' : '' }} name="kuzov_zang" id="kuzov_zang1">
                                <label class="form-check-label" for="kuzov_zang1">
                                    Мавжуд
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" value="t" {{ old('kuzov_zang')== "t" ? 'checked' : '' }} name="kuzov_zang" id="kuzov_zang2" checked>
                                <label class="form-check-label" for="kuzov_zang2">
                                    Мавжуд емас
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.36</h6>
                            <h6>Гулишитрда тешиклар, ёриқлар, синишлар мавжудлиги</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" value="f" {{ old('gulishetil_sinish')== "f" ? 'checked' : '' }} name="gulishetil_sinish" id="gulishetil_sinish1">
                            <label class="form-check-label" for="gulishetil_sinish1">
                                Мавжуд
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" value="t" {{ old('gulishetil_sinish')== "t" ? 'checked' : '' }} name="gulishetil_sinish" checked id="gulishetil_sinish2">
                            <label class="form-check-label" for="gulishetil_sinish2">
                                Мавжуд емас
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.37</h6>
                            <h6>АТВ-нинг Спидометр холати</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" value="t" {{ old('spidometr')== "t" ? 'checked' : '' }} type="radio" name="spidometr" id="spidometr1" checked>
                            <label class="form-check-label" for="spidometr1">
                                Соз
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" value="f" {{ old('spidometr')== "f" ? 'checked' : '' }} type="radio" name="spidometr" id="spidometr2" >
                            <label class="form-check-label" for="spidometr2">
                                Носоз
                            </label>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-5 mb-3">
                        <h3>2-ПОСТ</h3>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">2.1</h6>
                            <h6>Руль коклонкасида кўндаланг ва ўқ бўйлаб люфтларнинг йўқлиги ва руль калонкаси махкамланишининг созлиги.</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" value="t" {{ old('rul_kalonka_soz')== "t" ? 'checked' : '' }} name="rul_kalonka_soz" checked id="rul_kalonka_soz1">
                            <label class="form-check-label" for="rul_kalonka_soz1">
                                Соз
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" value="f" {{ old('rul_kalonka_soz')== "f" ? 'checked' : '' }} name="rul_kalonka_soz" id="rul_kalonka_soz2">
                            <label class="form-check-label" for="rul_kalonka_soz2">
                                Носоз
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">2.2</h6>
                            <h6>Бузилишлар ,дефармация қолдиғи излари,ёриқлар ва бошқа нуқсонларнинг мавжуд эмаслиги , руль колонкаси эхтиёт қисмарнинг руль бошқаруви ва механизмининг картери тўлиқ ўрнатилганлиги.</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" value="t" {{ old('rul_kalonka_mexanizm')== "t" ? 'checked' : '' }} name="rul_kalonka_mexanizm" checked id="rul_kalonka_mexanizm1">
                            <label class="form-check-label" for="rul_kalonka_mexanizm1">
                                Соз
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" value="f" {{ old('rul_kalonka_mexanizm')== "f" ? 'checked' : '' }} name="rul_kalonka_mexanizm" id="rul_kalonka_mexanizm2">
                            <label class="form-check-label" for="rul_kalonka_mexanizm2">
                                Носоз
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">2.3</h6>
                            <h6>Руль  бошқауви гидротизимида зич(герметик)лик ва суюқликнинг меъёр даражасида бўлиши.</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" value="t" {{ old('rul_boshqaruv_miyor')== "t" ? 'checked' : '' }} name="rul_boshqaruv_miyor" checked id="rul_boshqaruv_miyor1">
                            <label class="form-check-label" for="rul_boshqaruv_miyor1">
                                Мувофиқ
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" value="f" {{ old('rul_boshqaruv_miyor')== "f" ? 'checked' : '' }} name="rul_boshqaruv_miyor" id="rul_boshqaruv_miyor2">
                            <label class="form-check-label" for="rul_boshqaruv_miyor2">
                                Номувофиқ
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">2.4</h6>
                            <h6>Руль бошқармаси кучай тиргичининг иш қобилияти . Руль ғилдираги ўнга чапга бурилишида кучайтириш ўзгаришининг силлиқлиги. </h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" value="t" {{ old('rul_kuchaytir_ish_qob')== "t" ? 'checked' : '' }} type="radio" name="rul_kuchaytir_ish_qob" checked id="rul_kuchaytir_ish_qob1">
                            <label class="form-check-label" for="rul_kuchaytir_ish_qob1">
                                Соз
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" value="f" {{ old('rul_kuchaytir_ish_qob')== "f" ? 'checked' : '' }} type="radio" name="rul_kuchaytir_ish_qob" id="rul_kuchaytir_ish_qob2">
                            <label class="form-check-label" for="rul_kuchaytir_ish_qob2">
                                Носоз
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">2.5</h6>
                            <h6>Двигатеь ишлаётган барқарор (нейтрал) холатда бошқарилаёган руль ғилдираги кучайтиргичининг ўз-ўзидан бурилмаслигини таъминлаш.</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" value="t" {{ old('dvigat_ish_barqaror')== "t" ? 'checked' : '' }} name="dvigat_ish_barqaror" checked id="dvigat_ish_barqaror1">
                            <label class="form-check-label" for="dvigat_ish_barqaror1">
                                Соз
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" value="f" {{ old('dvigat_ish_barqaror')== "f" ? 'checked' : '' }} name="dvigat_ish_barqaror" id="dvigat_ish_barqaror2">
                            <label class="form-check-label" for="dvigat_ish_barqaror2">
                                Носоз
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">2.6</h6>
                            <h6>Руль бошқарувида унинг жами (оралиқдаги бўшлиқ) люфт чегара қийматининг ошмаслигини таъминлаш. Жами   люфт - 10° дан ошмаслиги. (ИСЛМ)</h6>
                        </div>
                        <div class=" ml-4  javob">
                            <div class="d-flex">
                                <div class="form-check">
                                <input class="form-check-input" type="radio" value="t" {{ old('lift_cheg_qiymat')== "t" ? 'checked' : '' }} name="lift_cheg_qiymat" checked id="lift_cheg_qiymat1">
                                <label class="form-check-label" for="lift_cheg_qiymat1">
                                    Соз
                                </label>
                                </div>
                                <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" value="f" {{ old('lift_cheg_qiymat')== "f" ? 'checked' : '' }} name="lift_cheg_qiymat" id="lift_cheg_qiymat2">
                                <label class="form-check-label" for="lift_cheg_qiymat2">
                                    Носоз
                                </label>
                                </div>
                            </div>
                            <div class="mt-2 d-flex">
                                <label for="lyuft">Люфт қиймати: </label>
                                <input type="text" min="0"  class="form-control ml-3" value="{{old('lyuft_qiymat')}}" name="lyuft_qiymat" style="width:75px; height: 25px;" id="lyuft" placeholder="...%">
                                <span style="color:red; font-size: 14px;">@error('lyuft_qiymat'){{'Empty'}} @enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">2.7</h6>
                            <h6>АТВ*дан чиқаёган ифлослантирувчи чиқинди газлардаги моддалар таркибининг белгиланган талабларига мувофиқлиги (ИЁД*****мажбурий ёндириш билан) тирсакли вал  энг кўп  айланиш  частотаси-1,0  тирсакли вал энг кам айланиш частотаси -0,7</h6>
                        </div>
                        <div class=" ml-4  javob">
                            <label for="" class="font-weight-bold m-0 p-0">Бензин</label>
                            <div class=" d-flex">
                                </span><label for="benzin_min">Юқори вал айланиш частотаси 2500 ... 2800 об мин: </label>
                                <input type="text"  class="form-control ml-2" value="{{old('benzin_yuq_val_chas')}}" name="benzin_yuq_val_chas" style="width:75px; height: 25px;" id="benzin_min" placeholder="...0.7%">
                                <span style="color:red; font-size: 14px;">@error('benzin_yuq_val_chas'){{'Empty'}} @enderror</span>
                            </div>
                            <div class=" d-flex">
                                <label for="benzin_max">Енг паст вал айланиш частотаси об мax: </label>
                                <input type="text"  class="form-control ml-2" value="{{old('benzin_pas_val_chas')}}"  name="benzin_pas_val_chas" style="width:75px; height: 25px;" id="benzin_max" placeholder="...1.0%">
                                <span style="color:red; font-size: 14px;">@error('benzin_pas_val_chas'){{'Empty'}} @enderror</span>
                            </div>
                            <label for="" class="font-weight-bold m-0 p-0">Газ</label>
                            <div class=" d-flex">
                                <label for="gaz_min">Юқори вал айланиш частотаси 2500 ... 2800 об мин: </label>
                                <input type="text"  class="form-control ml-2" value="{{old('gaz_yuq_val_chas')}}" name="gaz_yuq_val_chas" style="width:75px; height: 25px;" id="gaz_min" placeholder="...0.7%">
                                <span style="color:red; font-size: 14px;">@error('gaz_yuq_val_chas'){{'Empty'}} @enderror</span>
                            </div>
                            <div class=" d-flex">
                                <label for="gaz_max">Енг паст вал айланиш частотаси об max: </label>
                                <input type="text"  class="form-control ml-2" value="{{old('gaz_pas_val_chas')}}" name="gaz_pas_val_chas" style="width:75px; height: 25px;" id="gaz_max" placeholder="...1.0%">
                                <span style="color:red; font-size: 14px;">@error('gaz_pas_val_chas'){{'Empty'}} @enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">2.8</h6>
                            <h6>АТВ* дан чиқарилган диель газлардаги тутун даражасининг ўрнатилган талабларга мувофиқлиги (ИЁД*****сиқилишдан ёниш билан)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" value="t" {{ old('diel_gaz_tutun')== "t" ? 'checked' : '' }} type="radio" name="diel_gaz_tutun" checked id="diel_gaz_tutun1">
                            <label class="form-check-label" for="diel_gaz_tutun1">
                                Мувофиқ
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" value="f" {{ old('diel_gaz_tutun')== "f" ? 'checked' : '' }}  type="radio" name="diel_gaz_tutun" id="diel_gaz_tutun2">
                            <label class="form-check-label" for="diel_gaz_tutun2">
                                Номувофиқ
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">2.9</h6>
                            <h6>Шовқин чиқариш  тизимидаги шовқин даражасининг меъёрларга мувофиқлиги. Шовқин даржаси 91 дБАдан ошмаслиги керак. (ГЛУШИТЕЛЬ)  91дБА</h6>
                        </div>
                        <div class=" ml-4  javob">
                            <div class=" d-flex">
                                <label for="shovqin_tashqi">Ташқи шовқин: </label>
                                <input type="text"  class="form-control ml-3" value="{{old('tashqi_shovqin')}}" name="tashqi_shovqin" style="width:75px; height: 25px;" id="shovqin_tashqi" placeholder="...дБА">
                                <span style="color:red; font-size: 14px;">@error('tashqi_shovqin'){{'Empty'}} @enderror</span>
                            </div>
                            <div class=" d-flex">
                                <label for="shovqin_umumiy">Tashqi va Mashina shovqini: </label>
                                <input type="text"  class="form-control ml-3" value="{{old('umumiy_shovqin')}}" name="umumiy_shovqin" style="width:75px; height: 25px;" id="shovqin_umumiy" placeholder="...дБА">
                                <span style="color:red; font-size: 14px;">@error('umumiy_shovqin'){{'Empty'}} @enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">2.10</h6>
                            <h6>Ўрнатилган меёрларга кўра товуш даражасига эга бўлган овозли огохлантириш қурилмасиинг мавжудлиги ва ишлаш қобилияти 90 дБА дан кам бўлмаслиги керак.</h6>
                        </div>
                        <div class=" ml-4  javob">
                            <div class="d-flex">
                                <div class="form-check">
                                <input class="form-check-input" type="radio" value="t" {{ old('ovozli_ogoh_quril')== "t" ? 'checked' : '' }} name="ovozli_ogoh_quril"checked id="ovozli_ogoh_quril1">
                                <label class="form-check-label" for="ovozli_ogoh_quril1">
                                    Мавжуд
                                </label>
                                </div>
                                <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" value="f" {{ old('ovozli_ogoh_quril')== "f" ? 'checked' : '' }} name="ovozli_ogoh_quril" id="ovozli_ogoh_quril2" >
                                <label class="form-check-label" for="ovozli_ogoh_quril2">
                                    Мавжуд емас
                                </label>
                                </div>
                            </div>
                            <div class="mt-2 d-flex">
                                <label for="signal_qobl">Сигнал қобилия: </label>
                                <input type="text"  class="form-control ml-3" name="signal_qobil" value="{{old('signal_qobil')}}" style="width:75px; height: 25px;" id="signal_qobl" placeholder="...дБА"><span>дБА</span>
                                <span style="color:red; font-size: 14px;">@error('signal_qobil'){{'Empty'}} @enderror</span>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-5 mb-3">
                        <h3>3-ПОСТ</h3>
                    </div>

                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">3.1</h6>
                            <h6> Тормоз узатиш қисм(элемент)ларида занг(коррозия),механик шикастланишлар,ёриқлар,нуксон(деформация)лар қолдиғи,қуврлар ёки бўғинлар зич(геметик)лигининг бузилиши,тормоз суюқлиги оқишининг мавжуд эмаслиги</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" value="t" {{ old('tormoz_uzatish_qism')== "t" ? 'checked' : '' }} name="tormoz_uzatish_qism" checked id="tormoz_uzatish_qism1">
                            <label class="form-check-label" for="tormoz_uzatish_qism1">
                                Соз
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" value="f" {{ old('tormoz_uzatish_qism')== "f" ? 'checked' : '' }} name="tormoz_uzatish_qism" id="tormoz_uzatish_qism2">
                            <label class="form-check-label" for="tormoz_uzatish_qism2">
                                Носоз
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">3.2</h6>
                            <h6>Ғилдиракарнинг тормоз қисмидаги механизмда механик шикастланишлар ,ёриқлар,нуқсонлар(деформациялар),мойлаш ашё(материал)лари ва тормоз суюқлиги билан ифлосланиши мавжуд эмаслиги.</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" value="f" {{ old('gildirak_tor_mex')== "f" ? 'checked' : '' }} name="gildirak_tor_mex" id="gildirak_tor_mex1">
                            <label class="form-check-label" for="gildirak_tor_mex1">
                                Мавжуд
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" value="t" {{ old('gildirak_tor_mex')== "t" ? 'checked' : '' }} name="gildirak_tor_mex" id="gildirak_tor_mex2" checked>
                            <label class="form-check-label" for="gildirak_tor_mex2">
                                Мавжуд емас
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">3.3</h6>
                            <h6>Босим остида тормоз шлангларининг  шишиши,ёриқлар ва кўринадиган едирилиш, силлиқ жойларнинг мавжуд эмаслиги.</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" value="f" {{ old('bosim_tor_shikas')== "f" ? 'checked' : '' }} name="bosim_tor_shikas" id="bosim_tor_shikas1">
                            <label class="form-check-label" for="bosim_tor_shikas1">
                                Мавжуд
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" value="t" {{ old('bosim_tor_shikas')== "t" ? 'checked' : '' }} name="bosim_tor_shikas" id="bosim_tor_shikas2" checked>
                            <label class="form-check-label" for="bosim_tor_shikas2">
                                Мавжуд емас
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">3.4</h6>
                            <h6>Осма ва узатиш карданлардаги болтли уланмаларнинг мустахкамлиги.</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" value="t" {{ old('osma_uzat_kar')== "t" ? 'checked' : '' }} name="osma_uzat_kar" checked id="osma_uzat_kar1">
                            <label class="form-check-label" for="osma_uzat_kar1">
                                Соз
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" value="f" {{ old('osma_uzat_kar')== "f" ? 'checked' : '' }} name="osma_uzat_kar" id="osma_uzat_kar2">
                            <label class="form-check-label" for="osma_uzat_kar2">
                                Носоз
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">3.5</h6>
                            <h6>Тезликни ва босиб ўтилган йўлни ўлчаш қурилмасининг ишлаши. (СПИДОМЕТР)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" value="t" {{ old('tezla_spidometr')== "t" ? 'checked' : '' }} name="tezla_spidometr" checked id="tezla_spidometr1">
                            <label class="form-check-label" for="tezla_spidometr1">
                                Соз
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" value="f" {{ old('tezla_spidometr')== "f" ? 'checked' : '' }} name="tezla_spidometr" id="tezla_spidometr2">
                            <label class="form-check-label" for="tezla_spidometr2">
                                Носоз
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">3.6</h6>
                            <h6>Ишчи тормоз тизимининг барқарорлиги ва тормозланиш самарадорлиги -490 Н  1-ўқга - 0,53%  2-ўқга -0,53%</h6>
                        </div>
                        <div class=" ml-4  javob">
                            <div class="">
                                <div class="d-flex align-items-center">
                                    <label for="tormoz_samara" class="m-0">Tормоз самарадорлиги: </label>
                                    <input type="text"  class="form-control ml-3" value="{{old('tormoz_sam')}}" name="tormoz_sam" style="width:75px; height: 25px;" id="tormoz_samara" placeholder="... Н">
                                    <span style="color:red; font-size: 14px;">@error('tormoz_sam'){{'Empty'}} @enderror</span>
                                </div>
                                <div class="mt-2 d-flex align-items-center">
                                    <label for="uq_barqaror" class="m-0">Ўқ барқарорлиги: </label>
                                    <input type="text"  class="form-control ml-3" value="{{old('uq_barqar')}}" name="uq_barqar" style="width:75px; height: 25px;" id="uq_barqaror" placeholder="...%">
                                    <span style="color:red; font-size: 14px;">@error('uq_barqar'){{'Empty'}} @enderror</span>
                                </div>
                            </div>
                            <div class="d-flex mt-1">
                                <div class="form-check">
                                <input class="form-check-input" type="radio" value="t" {{ old('tor_tizm_samara')== "t" ? 'checked' : '' }} name="tor_tizm_samara" checked id="tor_tizm_samara1">
                                <label class="form-check-label" for="tor_tizm_samara1">
                                    Соз
                                </label>
                                </div>
                                <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" value="f" {{ old('tor_tizm_samara')== "f" ? 'checked' : '' }} name="tor_tizm_samara" id="tor_tizm_samara2">
                                <label class="form-check-label" for="tor_tizm_samara2">
                                    Носоз
                                </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">3.7</h6>
                            <h6>АТВ*нинг ўқлари бўйлаб тормоз кучларининг рухсат этилган нотекислигининг мувофиқлиги. 1 -ўқга - 15%  2 - ўқга - 20%</h6>
                        </div>
                        <div class=" ml-4  javob">
                            <div class="d-flex">
                                <div class="d-flex align-items-center">
                                    <label for="birin_uq_buy_bar" class="m-0">1 - ўқ: </label>
                                    <input type="text"  class="form-control ml-3" name="birinchi_uq_bar" value="{{old('birinchi_uq_bar')}}" style="width:75px; height: 25px;" id="birin_uq_buy_bar" placeholder="... %">
                                    <span style="color:red; font-size: 14px;">@error('birinchi_uq_bar'){{'Empty'}} @enderror</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <label for="ikkinchi_uq_buy_bar" class="m-0 ml-3">2 -ўқ: </label>
                                    <input type="text"  class="form-control ml-3" name="ikkinch_uq_bar" value="{{old('ikkinch_uq_bar')}}" style="width:75px; height: 25px;" id="ikkinchi_uq_buy_bar" placeholder="... %">
                                    <span style="color:red; font-size: 14px;">@error('ikkinch_uq_bar'){{'Empty'}} @enderror</span>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap mt-2">
                                <div class="form-check ">
                                <input class="form-check-input" type="radio" value="t" {{ old('uq_by_barqa')== "t" ? 'checked' : '' }} name="uq_by_barqa" id="uq_by_barqa1" checked>
                                <label class="form-check-label" for="uq_by_barqa1">
                                    Мувофиқ
                                </label>
                                </div>
                                <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" value="f"{{ old('uq_by_barqa')== "f" ? 'checked' : '' }} name="uq_by_barqa" id="uq_by_barqa2" >
                                <label class="form-check-label" for="uq_by_barqa2">
                                    Мувофиқ емас
                                </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">3.8</h6>
                            <h6>Автотураргохда тормозланиш самарадорлиги - 0,16 дан кам бўлмаслиги. Бошқарув органидаги кучи -392 Н ошмаслиги керак</h6>
                        </div>
                        <div class=" ml-4  javob">
                            <div class="d-flex flex-wrap">
                                <div class="d-flex align-items-center">
                                    <label for="tormoz_sam" class="m-0 p-0">Tормоз самарадорлиги: </label>
                                    <input type="text"  class="form-control ml-3" value="{{old('turar_tor_sam')}}" name="turar_tor_sam" style="width:75px; height: 25px;" id="tormoz_sam" placeholder="...">
                                    <span style="color:red; font-size: 14px;">@error('turar_tor_sam'){{'Empty'}} @enderror</span>
                                </div>
                                <div class="mt-1 ml-1 d-flex align-items-center">
                                    <label for="bosh_org_kuch" class="m-0 p-0">Бошқарув органидаги кучи: </label>
                                    <input type="text"  class="form-control ml-3" value="{{old('boshqar_org_kuch')}}" name="boshqar_org_kuch" style="width:75px; height: 25px;" id="bosh_org_kuch" placeholder="...Н">
                                    <span style="color:red; font-size: 14px;">@error('boshqar_org_kuch'){{'Empty'}} @enderror</span>
                                </div>
                            </div>
                            <div class="d-flex mt-1">
                                <div class="form-check">
                                <input class="form-check-input" type="radio" value="t" {{ old('tormz_sam')== "t" ? 'checked' : '' }} name="tormz_sam" id="tormz_sam1" checked>
                                <label class="form-check-label" for="tormz_sam1">
                                    Соз
                                </label>
                                </div>
                                <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" value="f" {{ old('tormz_sam')== "f" ? 'checked' : '' }} name="tormz_sam" id="tormz_sam2" >
                                <label class="form-check-label" for="tormz_sam2">
                                    Носоз
                                </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">3.9</h6>
                            <h6>Газ балон хақидаги маьлумотноманинг мавжудлиги. (АКТ ОПРЕСОВКИ)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                                <input class="form-check-input" value="t" {{ old('gaz_balon_mavjud')== "t" ? 'checked' : '' }} type="radio" name="gaz_balon_mavjud" checked id="gaz_balon_mavjud1">
                                <label class="form-check-label" for="gaz_balon_mavjud1">
                                    Мавжуд
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input class="form-check-input" value="f" {{ old('gaz_balon_mavjud')== "f" ? 'checked' : '' }} type="radio" name="gaz_balon_mavjud" id="gaz_balon_mavjud2">
                                <label class="form-check-label" for="gaz_balon_mavjud2">
                                    Мавжуд емас
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">3.10</h6>
                            <h6>СТГ жамланма(агрегат)ларининг уланиш тизимларининг зичлиги(герметик)лиги ва мустахкамлиги.1,0МРа босим остида СТГ тизимиринг бутунлигини текшириш.Электромагнит қопқоғининг ишлаши бутунлигини текшириш.СТГ уланиш тизимларининг ишончлилигини синовдан ўтказиш(зичлаштириш)2.5; 4.9;  9,8;ва 19,6 МРа босим остида уланган бўғимларни мустахкамлигини
                                 текширувдан ўтказиш.Хавони суриб олиш(ваккумлаштириш)ишларини ўтказиш</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" value="t" {{ old('stg_agregat')== "t" ? 'checked' : '' }} type="radio" name="stg_agregat" id="stg_agregat1" checked>
                            <label class="form-check-label" for="stg_agregat1">
                                Соз
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" value="f" {{ old('stg_agregat')== "f" ? 'checked' : '' }} name="stg_agregat" id="stg_agregat2" >
                            <label class="form-check-label" for="stg_agregat2">
                                Носоз
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex border-bottom pb-4">
                        <div class="d-flex savol">
                            <h6 class="mr-2">3.11</h6>
                            <h6>СНГ(ПРОПАН) жамланма(агрегатларининг уланиш тизимларининг зичлиги(герметик )лиги,1,6МРа босм остида СНГ тизимларини бутунигини текшириш.Ваккумлаштириш ишларини ўтказиш. </h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" value="t" {{ old('sng_propan')== "t" ? 'checked' : '' }} name="sng_propan" id="sng_propan1" checked>
                            <label class="form-check-label" for="sng_propan1">
                                Соз
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" value="f" {{ old('sng_propan')== "f" ? 'checked' : '' }} name="sng_propan" id="sng_propan2" >
                            <label class="form-check-label" for="sng_propan2">
                                Носоз
                            </label>
                            </div>
                        </div>
                    </div>
                    <input type="text" hidden  class="form-control ml-3" name="status_natija" style="width:1000px; height: 25px;" id="status_by_natija" placeholder="">


                    <div class="imzolar w-100 mt-5">
                        <div class="d-flex mt-2">
                            <div class="rahber  d-flex align-items-center w-50">
                                <h6>Лабаратория бошлиғи: </h6>
                            </div>
                            <div class="imzo w-25">
                                <img src="{{url('/images/imzo1.png')}}" class="img-fluid" style="height: 50px;" alt="">
                            </div>
                            <div class="imzo w-25  d-flex align-items-center"><h6>С.Ғ.Мамбитов</h6></div>
                        </div>
                        <div class="d-flex mt-2">
                            <div class="rahber  d-flex align-items-center w-50">
                                <h6>Синовчи мухандис: </h6>
                            </div>
                            <div class="imzo w-25">
                                <img src="{{url('/images/imzo2.png')}}" class="img-fluid" style="height: 50px;" alt="">
                            </div>
                            <div class="imzo  d-flex align-items-center w-25"><h6>Ғ.М.Ситмбетов</h6></div>
                        </div>
                        <div class="d-flex mt-2">
                            <div class="rahber  w-50 d-flex align-items-center">
                                <h6>Синовчи техник: </h6>
                            </div>
                            <div class="imzo w-25">
                                <img src="{{url('/images/imzo3.png')}}" class="img-fluid" style="height: 50px;" alt="">
                            </div>
                            <div class="imzo  d-flex align-items-center w-25"><h6> О.Х.Сатторов</h6></div>
                        </div>
                        <div class="d-flex mt-2">
                            <div class="rahber w-50 d-flex align-items-center">
                                <h6>Синов натижалири билан танишдим </h6>
                            </div>
                            <div class="imzo w-25"></div>
                            <div class="imzo w-25">
                                <input type="text" class="form-control" value="{{old('driver')}}" id="name_driver" name="driver" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="yuriqnoma mt-5">
                        <h6>АТВ* -Автотранспорт воситаси</h6>
                        <h6>ЙТХ** - Йўл транспорт ходисаси</h6>
                        <h6>СТБ***- Сиқилган табиий газ</h6>
                        <h6>СНГ****- Суйилтирилган нефт гази</h6>
                        <h6>ИЁД*****-Ички ёнилғи двигатели</h6>
                        <h6>ДРБ******- Давлат ракам белгиси</h6>
                    </div>

                    <div class="container mt-5 w-100">
                        <div class="shadow card w-100">
                            <div class="card-header d-flex justify-content-between">
                                <h4>Image Uploading</h4>
                                <input type="file" name="images[]" multiple class="d-none" onchange="image_select()" id="image">
                                <button class="btn btn-sm btn-primary" onclick="document.getElementById('image').click()" type="button" >Choose image</button>
                            </div>
                            <div class="card-body d-flex flex-wrap justify-content-center" id="container">
                                <img src="" alt="">
                                {{-- <div class="image_container d-flex justify-content-center position-relative">
                                    <img src="`+ i.url +`" alt="Image">
                                    <span class="position-absolute" onclick="delete_image(`+ images.indexOf(i) +`)">&times;</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>


                    <div class="text-right mt-5 ">
                        <button type="submit" onclick="func()" class="btn btn-success px-4">Jo'natish</button>
                    </div>
                </form>

            </div>
            </div>
        </div>
    </div>
    <style>
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
    <script type="text/javascript">
        var images = [];
        function image_select() {
   	  	  var image = document.getElementById('image').files;
               console.log(image);
               images = [];
               console.log(images);
   	  	  for (i = 0; i < image.length; i++) {
   	  	  	  if (check_duplicate(image[i].name)) {
                images.push({
   	  	  	  	    "name" : image[i].name,
   	  	  	  	    "url" : URL.createObjectURL(image[i]),
   	  	  	  	    "file" : image[i],
   	  	  	    })
   	  	  	  } else
   	  	  	  {
   	  	  	  	 alert(image[i].name + " is already added to the list");
   	  	  	  }
   	  	  }
   	  	//   document.getElementById('form').reset();
   	  	  document.getElementById('container').innerHTML = image_show();
   	    }
        function image_show() {
            var image = "";
            images.forEach((i) => {
                image += `<div class="image_container d-flex justify-content-center position-relative">
                    <img src="`+ i.url +`" alt="Image">
                </div>`;
            })
            return image;
        }
        function delete_image(e) {
            images.splice(e, 1);
            document.getElementById('container').innerHTML = image_show();
        }
        function check_duplicate(name) {
            var image = true;
            if (images.length > 0) {
                for (e = 0; e < images.length; e++) {
                    if (images[e].name == name) {
                        image = false;
                        break;
                    }
                }
            }
            return image;
        }
    </script>
</x-app-layout>
