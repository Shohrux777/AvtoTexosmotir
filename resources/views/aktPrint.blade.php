@extends('bootstrap')
<link rel="stylesheet" href="{{url('css/client.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


<x-app-layout>

    <div class="list_title">
        <h2 class="">Dalolatnoma</h2>
    </div>


    <div class="bg-secondary">
        <div class="d-flex justify-content-end pt-3 mr-4">
            <a><button onclick="printed()" class="d-flex btn btn-info">Print
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer ml-1 mt-1" width="17" height="17" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                    <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                    <rect x="7" y="13" width="10" height="8" rx="2" />
                </svg>
                </button>
            </a>
        </div>
        <div class="bg-white p-5 container" id="print">
            <div class="dalolatnoma container mt-3" >
                <div class="title text-center ">
                    <h5 class="font-weight-bold">Алоҳида транспорт воситасини техник кўрикдан ўтказиш</h5>
                    <h3 class="font-weight-bold">ДАЛОЛАТНОМАСИ</h3>
                </div>
                {{-- main --}}
                <div class="main_body">
                    <div class="sana">
                        <p>Тузилган санаси 2020 йил «<span>22</span>» <span>апрел</span> </p>
                    </div>
                    <div class="firma_nomi tag text-center past mb-3" >
                        <p class="m-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, minima?</p>
                        <span class="under_title">(Қўрикдан ўтказган ташкилот номи)</span>
                    </div>
                    <div class="mansabdor_shaxs d-flex">
                        <div class="nomi tag mb-3 w-50 past text-center">
                            <p class="m-0">Salimov Jamshid O'ktam o'gli</p>
                            <span class="under_title" style="left:30%;">мансабдор шахснинг лавозими, унвони, Ф.И.О</span>
                        </div>
                        <p>томонидан техник кўрик ўтказилди</p>
                    </div>
                    <div class="about_car">
                        <div class="d-flex mb-3">
                            <div class="w-50  pr-2">
                                <div class="mb-3">
                                    <p class="m-0">1.Транспорт воситасининг маркаси, модели
                                        <span class="tag px-4">{{$akt->model}}</span>
                                    </p>
                                </div>
                                <div class="d-flex mb-3">
                                    <p class="m-0">2. Тури  </p>
                                    <div  class="tag text-center w-75">
                                        <span>{{$akt->avto_turi}}</span>
                                    </div>
                                </div>
                                <div class="mb-3 d-flex">
                                    <p class="m-0">3. Ранги  </p>
                                    <div class="tag text-center w-75">
                                        <span>{{$akt->rangi}}</span>
                                    </div>
                                </div>
                                <div class="mb-3 d-flex">
                                    <p class="m-0">4. Ишлаб чиқарилган йили</p>
                                    <div class="tag text-center w-50">
                                        <span>{{$akt->ishlab_sana}}</span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <p class="m-0">5. Давлат рўйхатидан ўтказиш рақами
                                        <span class="tag px-5">{{$akt->d_raqami }}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="w-50">
                                <div class="mb-3">
                                    <p class="m-0">6. Шасси (рама) рақами
                                    <span class="px-5 tag">{{$akt->sh_raqami}}</span> </p>
                                </div>
                                <div class="mb-3 d-flex">
                                    <p class="m-0">7. Двигатель рақами </p>
                                    <div  class="tag text-center w-50">
                                        <span>{{$akt->dv_raqami}}</span>
                                    </div>
                                </div>
                                <div class="mb-3 d-flex">
                                    <p class="m-0">8. Кузов рақами  </p>
                                    <div class="tag text-center w-50">
                                        <span>{{$akt->kuzov}}</span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <p class="m-0">9. Рўйхатдан ўтказиш тўғрисидаги гувоҳнома (техник паспорт) серияси, рақами
                                        <span class="tag px-5">{{$akt->texnik_pass }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 d-flex">
                            <p class="m-0">10. Транспорт воситаси</p>
                            <div class="tag text-center past" style="width: 82%;">
                                <span>{{$akt->name}}</span>
                                <span class="under_title" style="left:30%; top: 23px;">(юридик шахснинг тўлиқ номи,якка тартибдаги транспорт воситаси эгасининг Ф.И.О)</span>
                            </div>
                        </div>
                        <div class="mb-3 d-flex">
                            <div class="tag text-center" style="width: 50%;">
                                <span></span>
                            </div>
                            <p class="m-0">га тегишли</p>
                        </div>
                        <div class="mb-3 d-flex">
                            <p class="m-0">11. Жойлашган жойи (турар жойи)
                            </p>
                            <div class="tag text-center" style="width: 70%;">
                                <span>{{$akt->manzil}}</span>
                            </div>
                        </div>
                        @if ($akt->status != ' ')
                           <div class="mb-3">
                                <p class="m-0">12. Қуйидаги техник носозликлар аниқланди:
                                    <span class="tag px-5">{{$akt->code}}-сонли далолатноманинг  {{$akt-> status}} пункитлари бўйича носозликлар аниқланди</span>
                                </p>
                            </div>


                        @else
                            <div class="mb-3 d-flex">
                                <p class="m-0">12. Қуйидаги техник носозликлар аниқланди:
                                </p>
                                <div class="tag text-center" style="width: 70%;">
                                    <span>Носозликлар аниқланмади</span>
                                </div>
                            </div>

                        @endif
                        <div class="mb-3 d-flex">
                            <p class="m-0">13. Автомашинанинг ҳолати
                            </p>
                            @if($akt->status != ' ')
                            <div class="tag text-center" style="width: 75%;">
                                <span>Фойдаланишга яроқсиз</span>
                            </div>
                            @else
                            <div class="tag text-center" style="width: 75%;">
                                <span>Фойдаланишга яроқли</span>
                            </div>
                            @endif
                        </div>
                        <div class="mb-3 d-flex">
                            <p class="m-0">14. Радиотўсиқларни йўқотиш мосламаларининг мавжудлиги
                            </p>
                            <div class="tag text-center" style="width: 50%;">
                                <span>Мавжуд емас</span>
                            </div>
                        </div>
                        <div class="mb-3 d-flex">
                            <p class="m-0">15. Спидометрнинг ҳолати
                            </p>
                            @if($akt->spidometr == 'true')
                            <div class="tag text-center" style="width: 75%;">
                                <span>Ишлайди</span>
                            </div>
                            @else
                            <div class="tag text-center" style="width: 75%;">
                                <span>Ишламайди</span>
                            </div>
                            @endif
                        </div>
                        <div class="mb-3 d-flex">
                            <p class="m-0">16. Техник ҳолати тўғрисида хулоса
                            </p>
                            @if($akt->status != ' ')
                            <div class="tag text-center past" style="width: 70%;">
                                <span>Носоз</span>
                                <span class="under_title" style="left:42%; top: 23px;">(техник жиҳатдан соз, носоз)</span>
                            </div>
                            @else
                            <div class="tag text-center past" style="width: 70%;">
                                <span>Соз</span>
                                <span class="under_title" style="left:42%; top: 23px;">(техник жиҳатдан соз, носоз)</span>
                            </div>
                            @endif
                        </div>
                        <div class="mb-3 d-flex">
                            <p class="m-0">Марказ текширувчи ходими
                            </p>
                            <div class="tag text-center past" style="width: 75%;">
                                <span>Hamdulla Hakimov Zokirovich</span>
                                <span class="under_title" style="left:50%; top: 23px;">(имзо, Ф.И.О)</span>
                            </div>
                        </div>
                        <div class="mb-3 d-flex">
                            <p class="m-0">Далолатнома нусхасини олдим
                            </p>
                            <div class="tag text-center past" style="width: 73%;">
                                <span>{{$akt->name}}</span>
                                <span class="under_title" style="left:48.5%; top: 23px;">(имзо, Ф.И.О)</span>
                            </div>
                        </div>
                        <div class="mt-5">
                            <p> Изох №1: Далолатнома тузилган кундан бошлаб 10 (ўн)  кун мобайнида хақиқийдир ва техник кўрикдан ўтказиш натижаларини расмийлаштириш «Техник кўрик» автоматлаштирилган ахборот тизимига киритиш учун асос бўлиб хизмат қилади.</p>
                            <p>Изох №2: Далолатномага илова килинган автомототранспорт воситасинининг носозлигини ўзида акс эттирувчи илова яни расм  avtonazorat.uz  электрон базасида 1 (бир) ой муддатда сақланади ва ундан сўнг дастурий таминот тамонидан автоматик равишда ўчириб юборилади.</p>
                            <p>Изох №3: Марказ тамонидан далолатнома асосида носоз деб топилган ва такрорий  кўрик учун қайтарилган транспорт воситаси белгиланган муддатдан кейин, носозликни бартараф килингандан кейин қайта кўрикка мурожаат қилганда 1- марта яни такрорий техник кўрик учун тўлов ундирилмайди, агар яна носозлик аниқланса 2- ва ундан кейинги кўрикларда асосли равишда тўлов ундирилади.</p>
                            <p>Изох №4: Транспорт воситаси олдинги кўрикдан ўтказиш вақтидан бошлаб 20 кундан ортиқ бўлган муддатда такрорий кўрикдан ўтказишга қўйилган тақдирда, техник ҳолатни текшириш тўлиқ ҳажмда ўтказилади.</p>
                            <p>Асос:  <a href="">Ўзбекистон Республикаси Вазирлар Маҳкамасининг 2021 йил 9 мартдаги 125-сон қарори</a></p>
                        </div>

                        <div class="d-flex justify-content-center mt-4">
                            <img src="{{url('images/pechat.png')}}" alt="" class="img-fluid" style="width: 200px;">
                        </div>
                    </div>
                </div>
            </div>
            @if($akt->yoqilgi_turi == 'spg' || $akt->yoqilgi_turi == 'smg')
            <div class="gaz_akt container" style="margin-top:100px;">
                <div class="title text-center mt-5">
                    <h5 class="font-weight-bold pt-4">Газ ёнилғисида ишлаш учун қайта жиҳозланган алоҳида
                        транспорт воситасини техник кўрикдан ўтказиш
                        </h5>
                    <h3 class="font-weight-bold">ДАЛОЛАТНОМАСИ</h3>
                </div>
                {{-- main --}}
                <div class="main_body">
                    <div class="sana">
                        <p>Тузилган санаси 2020 йил «<span>22</span>» <span>апрел</span> </p>
                    </div>
                    <div class="firma_nomi tag text-center past mb-3">
                        <p class="m-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, minima?</p>
                        <span class="under_title">(Қўрикдан ўтказган ташкилот номи)</span>
                    </div>
                    <div class="mansabdor_shaxs d-flex">
                        <div class="nomi tag mb-3 w-50 text-center past">
                            <p class="m-0">Salimov Jamshid O'ktam o'gli</p>
                            <span class="under_title" style="left:30%;">мансабдор шахснинг лавозими, унвони, Ф.И.О</span>
                        </div>
                        <p>томонидан техник кўрик ўтказилди</p>
                    </div>
                    <div class="about_car">
                        <div class="d-flex mb-3">
                            <div class="w-50  pr-3">
                                <div class="mb-3">
                                    <p class="m-0">1.Транспорт воситасининг маркаси, модели
                                        <span class="tag px-4">{{$akt->model}}</span>
                                    </p>
                                </div>
                                <div class="d-flex mb-3">
                                    <p class="m-0">2. Тури  </p>
                                    <div  class="tag text-center w-75">
                                        <span>{{$akt->avto_turi}}</span>
                                    </div>
                                </div>
                                <div class="mb-3 d-flex">
                                    <p class="m-0">3. Ранги  </p>
                                    <div class="tag text-center w-75">
                                        <span>{{$akt->rangi}}</span>
                                    </div>
                                </div>
                                <div class="mb-3 d-flex">
                                    <p class="m-0">4. Ишлаб чиқарилган йили</p>
                                    <div class="tag text-center w-50">
                                        <span>{{$akt->ishlab_sana}}</span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <p class="m-0">5. Давлат рўйхатидан ўтказиш рақами
                                        <span class="tag px-5">{{$akt->d_raqami }}</span>
                                    </p>
                                </div>
                                <div class="mb-3 d-flex">
                                    <p class="m-0">9а. Газ ёнилғиси тури </p>
                                    <div class="tag text-center past w-50">
                                        @if ($akt->yoqilgi_turi =='spg')
                                        <span>Сиқилган табиий газ</span>
                                        @else
                                        <span>Суйилтирилган нефт гази</span>
                                        @endif
                                        <span class="under_title" style="left:20%; top: 23px;">(суюлтирилган газ, сиқилган газ)</span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <p class="m-0">9б. Газ баллони ишлаб чиқарилган йил
                                        <span class="tag px-5">{{$akt->gaz_ishlab_chiq }}</span>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <p class="m-0">9г. Газ баллонидан фойдаланиш муддати
                                        @if ($akt->yoqilgi_turi =='spg')
                                        <span class="tag px-5">15 yil</span>
                                        @else
                                        <span class="tag px-5">10 yil</span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <div class="w-50">
                                <div class="mb-3">
                                    <p class="m-0">6. Шасси (рама) рақами
                                    <span class="px-5 tag">{{$akt->sh_raqami}}</span> </p>
                                </div>
                                <div class="mb-3 d-flex">
                                    <p class="m-0">7. Двигатель рақами </p>
                                    <div  class="tag text-center w-50">
                                        <span>{{$akt->dv_raqami}}</span>
                                    </div>
                                </div>
                                <div class="mb-3 d-flex">
                                    <p class="m-0">8. Кузов рақами  </p>
                                    <div class="tag text-center w-50">
                                        <span>{{$akt->kuzov}}</span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <p class="m-0">9. Рўйхатдан ўтказиш тўғрисидаги гувоҳнома (техник паспорт) серияси, рақами
                                        <span class="tag px-5">{{$akt->texnik_pass }}</span>
                                    </p>
                                </div>
                                <div class="mb-3 d-flex">
                                    <p class="m-0">9в. Газ баллони рақами  </p>
                                    <div class="tag text-center w-50">
                                        <span>{{$akt->gaz_raqam}}</span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <p class="m-0">9д. Газ баллони синовдан ўтказилган сана
                                        <span class="tag px-5">{{$akt->gaz_oxir_sana }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 d-flex">
                            <p class="m-0">9е. Газ баллонини навбатдаги синовдан ўтказиш санаси </p>
                            <div class="tag text-center" style="width: 50%;">
                                <span>{{$akt->oxirgi_tek}}</span>
                            </div>
                        </div>
                        <div class="mb-3 d-flex">
                            <p class="m-0">10. Транспорт воситаси</p>
                            <div class="tag text-center  past" style="width: 82%;">
                                <span>{{$akt->name}}</span>
                                <span class="under_title" style="left:30%; top: 23px;">(юридик шахснинг тўлиқ номи,якка тартибдаги транспорт воситаси эгасининг Ф.И.О)</span>
                            </div>
                        </div>
                        <div class="mb-3 d-flex">
                            <div class="tag text-center" style="width: 50%;">
                                <span></span>
                            </div>
                            <p class="m-0">га тегишли</p>
                        </div>
                        <div class="mb-3 d-flex">
                            <p class="m-0">11. Жойлашган жойи (турар жойи)
                            </p>
                            <div class="tag text-center" style="width: 70%;">
                                <span>{{$akt->manzil}}</span>
                            </div>
                        </div>
                        @if ($akt->status != ' ')
                           <div class="mb-3">
                                <p class="m-0">12. Қуйидаги техник носозликлар аниқланди:
                                    <span class="tag px-5">{{$akt->code}}-сонли далолатноманинг  {{$akt-> status}} пункитлари бўйича носозликлар аниқланди</span>
                                </p>
                            </div>


                        @else
                            <div class="mb-3 d-flex">
                                <p class="m-0">12. Қуйидаги техник носозликлар аниқланди:
                                </p>
                                <div class="tag text-center" style="width: 70%;">
                                    <span>Носозликлар аниқланмади</span>
                                </div>
                            </div>

                        @endif
                        <div class="mb-3 d-flex">
                            <p class="m-0">13. Автомашинанинг ҳолати
                            </p>
                            @if($akt->status != ' ')
                            <div class="tag text-center" style="width: 75%;">
                                <span>Фойдаланишга яроқсиз</span>
                            </div>
                            @else
                            <div class="tag text-center" style="width: 75%;">
                                <span>Фойдаланишга яроқли</span>
                            </div>
                            @endif
                        </div>
                        <div class="mb-3 d-flex">
                            <p class="m-0">14. Радиотўсиқларни йўқотиш мосламаларининг мавжудлиги
                            </p>
                            <div class="tag text-center" style="width: 50%;">
                                <span>Мавжуд емас</span>
                            </div>
                        </div>
                        <div class="mb-3 d-flex">
                            <p class="m-0">15. Спидометрнинг ҳолати
                            </p>
                            @if($akt->spidometr == 'true')
                            <div class="tag text-center" style="width: 75%;">
                                <span>Ишлайди</span>
                            </div>
                            @else
                            <div class="tag text-center" style="width: 75%;">
                                <span>Ишламайди</span>
                            </div>
                            @endif
                        </div>
                        <div class="mb-3 d-flex">
                            <p class="m-0">16. Техник ҳолати тўғрисида хулоса
                            </p>
                            @if($akt->status != ' ')
                            <div class="tag text-center past" style="width: 70%;">
                                <span>Носоз</span>
                                <span class="under_title" style="left:42%; top: 23px;">(техник жиҳатдан соз, носоз)</span>
                            </div>
                            @else
                            <div class="tag text-center past" style="width: 70%;">
                                <span>Соз</span>
                                <span class="under_title" style="left:42%; top: 23px;">(техник жиҳатдан соз, носоз)</span>
                            </div>
                            @endif
                        </div>
                        <div class="mb-3 d-flex">
                            <p class="m-0">Марказ текширувчи ходими
                            </p>
                            <div class="tag text-center past" style="width: 75%;">
                                <span>Hamdulla Hakimov Zokirovich</span>
                                <span class="under_title" style="left:50%; top: 23px;">(имзо, Ф.И.О)</span>
                            </div>
                        </div>
                        <div class="mb-3 d-flex">
                            <p class="m-0">Далолатнома нусхасини олдим
                            </p>
                            <div class="tag text-center past" style="width: 73%;">
                                <span>{{$akt->name}}</span>
                                <span class="under_title" style="left:48.5%; top: 23px;">(имзо, Ф.И.О)</span>
                            </div>
                        </div>
                        <div class="mt-5">
                            <p> Изох №1: Далолатнома тузилган кундан бошлаб 10 (ўн)  кун мобайнида хақиқийдир ва техник кўрикдан ўтказиш натижаларини расмийлаштириш «Техник кўрик» автоматлаштирилган ахборот тизимига киритиш учун асос бўлиб хизмат қилади.</p>
                            <p>Изох №2: Далолатномага илова килинган автомототранспорт воситасинининг носозлигини ўзида акс эттирувчи илова яни расм  avtonazorat.uz  электрон базасида 1 (бир) ой муддатда сақланади ва ундан сўнг дастурий таминот тамонидан автоматик равишда ўчириб юборилади.</p>
                            <p>Изох №3: Марказ тамонидан далолатнома асосида носоз деб топилган ва такрорий  кўрик учун қайтарилган транспорт воситаси белгиланган муддатдан кейин, носозликни бартараф килингандан кейин қайта кўрикка мурожаат қилганда 1- марта яни такрорий техник кўрик учун тўлов ундирилмайди, агар яна носозлик аниқланса 2- ва ундан кейинги кўрикларда асосли равишда тўлов ундирилади.</p>
                            <p>Изох №4: Транспорт воситаси олдинги кўрикдан ўтказиш вақтидан бошлаб 20 кундан ортиқ бўлган муддатда такрорий кўрикдан ўтказишга қўйилган тақдирда, техник ҳолатни текшириш тўлиқ ҳажмда ўтказилади.</p>
                            <p>Асос:  <a href="">Ўзбекистон Республикаси Вазирлар Маҳкамасининг 2021 йил 9 мартдаги 125-сон қарори</a></p>
                        </div>

                        <div class="d-flex justify-content-center mt-4">
                            <img src="{{url('images/pechat.png')}}" alt="" class="img-fluid" style="width: 130px;">
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

    <style>
        span{
            font-weight: 550;
            margin-left: 5px;
        }
        .under_title{
            font-size: 9px;
            color: rgb(59, 59, 59);
            position: absolute;
            left: 50%;
        }
        .dalolatnoma{
            width: 90%;
            margin: 0 auto;
        }
        .past{
            position: relative;
        }
        .tag{
            border-bottom: 1px solid black;
        }
    </style>
    <script>
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
