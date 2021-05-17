@extends('bootstrap')
    <x-app-layout>
    <!-- <x-slot name="header">
        <!-- it header navigator -->
    </x-slot> -->

    <div class="">
        <div class="">
            <div class="bg-white overflow-hidden shadow-xl ">
            <div class="p-3 max-w-7xl mx-auto mb-5"  >
                <div class="title mb-5">
                    <h4 style="font-family: 'PT Sans', sans-serif;">Planshit sahifa</h4>
                </div>
                <div  class="my-5">
                    <div class="row">
                        <div class="col-3">
                            <label for="exampleFormControlInput1" class="form-label m-0 p-0">Familiyasi Ismi Sharifi</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-3">
                            <label for="exampleFormControlInput1" class="form-label m-0 p-0">Davlat raqami</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-3">
                            <label for="exampleFormControlInput1" class="form-label m-0 p-0">Dvigatel raqami</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-3">
                            <label for="exampleFormControlInput1" class="form-label m-0 p-0">Rusumi</label>
                            <select class="form-select" aria-label="Default select example">
                            <option selected>Avtomobil rusumini tanlang...</option>
                            <option value="1">Malibu</option>
                            <option value="2">Nexia 2</option>
                            <option value="3">Spark</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="exampleFormControlInput1" class="form-label m-0 p-0">Rangi</label>
                            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                            <datalist id="datalistOptions">
                            <option value="Oq">
                            <option value="Qora">
                            <option value="Ko'k">
                            <option value="Yashil">
                            <option value="Sariq">
                            </datalist>
                        </div>
                        <div class="col-3">
                            <label for="exampleFormControlInput1" class="form-label m-0 p-0">Texnik pasporti</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                    </div>
                </div>
                <form action="" class="planshit_question">
                    <div class="d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.1</h6>
                            <h6>Биинчи тиббий ёрдам кўрсатиш учун тиббиёт қутисининг мавжудлиги (Аптечка)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="aptechka" id="aptechka1">
                            <label class="form-check-label" for="aptechka1">
                                Бор
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="aptechka" id="aptechka2" checked>
                            <label class="form-check-label" for="aptechka2">
                                Йуқ
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.2</h6>
                            <h6>Ўрнатилган  талабларга мувофиқ ўт ўчириш мосламасининг мавжудлиги (Ог нетушитель)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="ogon" id="ogon1">
                            <label class="form-check-label" for="ogon1">
                                Бор
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="ogon" id="ogon2" checked>
                            <label class="form-check-label" for="ogon2">
                                Йуқ
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.3</h6>
                            <h6>Йўл транспорт ходисаси (авария) холатида тўхтаб туриш белисининг  мавжудлиги. (Стоп сигнал)(Жилет)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="znak" id="znak1">
                            <label class="form-check-label" for="znak1">
                                Бор
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="znak" id="znak2" checked>
                            <label class="form-check-label" for="znak2">
                                Йуқ
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.4</h6>
                            <h6>АТВ*нинг хавфсизлик камарларини соз ҳолатда бўлишини таъминлаш. (Ремень)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="remen" id="remen1">
                            <label class="form-check-label" for="remen1">
                                Соз
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="remen" id="remen2" checked>
                            <label class="form-check-label" for="remen2">
                                Носоз
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.5</h6>
                            <h6>Талабларга мувофиқ  орқани  кўриш  ойналарининг мавжудлиги.(ОРҚА ОЙНА ВА БАКАВОЙ)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="bakavoy" id="bakavoy1">
                            <label class="form-check-label" for="bakavoy1">
                                Мавжуд
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="bakavoy" id="bakavoy2" checked>
                            <label class="form-check-label" for="bakavoy2">
                                Мавжуд емас
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.6</h6>
                            <h6>Хайдовчи ўриндиғдан кўринишни чеклайдиган қўшимча нарсалар мавжуд эмаслиги. <br> Олд  пешойнанинг юқори  қисмидаги плёнканинг белгиланган талабларга мувофиқлиги.(14см)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="qushimcha" id="qushimcha1">
                                <label class="form-check-label" for="qushimcha1">
                                    Мавжуд
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" name="qushimcha" id="qushimcha2" checked>
                                <label class="form-check-label" for="qushimcha2">
                                    Мавжуд емас
                                </label>
                            </div>
                            <div class="ml-5 d-flex">
                                <label for="plyonka">Плёнканинг размери:</label>
                                <input type="text"  class="form-control ml-3" style="width:75px; height: 25px;" id="plyonka" placeholder="...см">
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.7</h6>
                            <h6>Пешойнада хайдовчининг ойна артгич худудида ёриқлар ва синган чизиқларнинг йўқлиги (ТРЕЩИНА)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="treshina" id="treshina1">
                            <label class="form-check-label" for="treshina1">
                                Бор
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="treshina" id="treshina2" checked>
                            <label class="form-check-label" for="treshina2">
                                Йуқ
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.8</h6>
                            <h6>Пешойна тозалагичи, сув пуркагичлар ва қуёшга қарши пештахта (соябон) нинг борлиги (СОЯБОН)</h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="soyabon" id="soyabon1">
                            <label class="form-check-label" for="soyabon1">
                                Бор
                            </label>
                            </div>
                            <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="soyabon" id="soyabon2" checked>
                            <label class="form-check-label" for="soyabon2">
                                Йуқ
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex">
                        <div class="d-flex savol">
                            <h6 class="mr-2">1.9</h6>
                            <h6>Шиналардан фойдаланишда нуқсонларнинг мавжуд эмаслигини ва уларнинг ўлчамларини кўриш. 1.6-2.мм </h6>
                        </div>
                        <div class="d-flex ml-4  javob">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="shina" id="shina1">
                                <label class="form-check-label" for="shina1">
                                    Нуқсонлар мавжуд
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" name="shina" id="shina2" checked>
                                <label class="form-check-label" for="shina2">
                                    Нуқсонлар мавжуд емас
                                </label>
                            </div>
                            <div class="ml-5 d-flex">
                                <label for="shina">Шина ўлчамлари:</label>
                                <input type="text"  class="form-control ml-3" style="width:75px; height: 25px;" id="shina" placeholder="...мм">
                            </div>
                        </div>
                    </div>
                    <div class="text-right mt-5 ">
                        <button type="button" class="btn btn-success px-4">Jo'natish</button>
                    </div>
                </form>

            </div>
            </div>
        </div>
    </div>
</x-app-layout>
