@extends('bootstrap')
<link rel="stylesheet" href="{{url('css/client.css')}}">
<script src="{{url('js/client.js')}}"></script>
    <x-app-layout>
        <div class="print container my-5">
            <button  class="btn btn-info" onclick="printed()">Print</button>
            <a href="{{url('clients')}}"><button  class="btn btn-success" style="float: right;">Create Client</button></a>
            <div id="contenerPrint">
                <div class="border px-4" >
                    <div class="d-flex justify-content-center mt-4 mb-3">
                        <div class="text-center title">
                            <h5>Жисмония ва юридик шахсларга тегишли транспорт воситасининг техник холати тўғрисида</h5>
                            <h3>М А Ь Л У М О Т Н О М А № {{$prints->code}}/2021</h3>
                            <p class="m-0">"Ахрорбек Авто Назорат" МЧЖ га карашли Автодиагностика марказида</p>
                        </div>
                    </div>
                    <div class="main">
                        <p> <span>{{$prints->sana}}</span> йилда тугилган <span>{{$prints->manzil}}</span>да яшовчи фукаро <span>{{$prints->name}}</span>га тегишли давлат ракам белгиси <span>{{$prints->d_raqami}}</span>,
                             двигател рақами № <span>{{$prints->dv_raqami}}</span>, кузов рақами №<span>{{$prints->kuzov}}</span>, шоссе рақами № <span>{{$prints->sh_raqami}}</span>, транспорт
                              воситаси тури <span>{{$prints->avto_turi}}</span>, русуми <span>{{$prints->rusumi}}</span>, ранги <span>{{$prints->rangi}}</span>, <span>{{$prints->ishlab_sana}}</span>
                              йилда ишлаб чикарилган, <span>{{$prints->yoqilgi_turi}}</span>
                              ёкилғисида хакатланишга мослашган, техник паспорт раками № <span>{{$prints->texnik_pass}}</span> булган автомашига холати
                             текширилди ва транспорт воситасининг техник жихатдан созлиги стандарт талабларига, йул харакати хавфсизлиги коидалари ва нормаларига жавоб бериши аникланди.</p>
                    </div>
                    <div class="raxbar mt-3 mb-2 d-flex justify-content-between">
                        <p>Жамият рахбари</p>
                        <p class="mr-4">С.Мамбетов</p>
                    </div>
                    <div class="sana">
                        <p>20 май 2021 йил</p>
                    </div>
                    <div class="izoh">
                        <p><span>ИЗОХ: </span>Ушбу маьлумотнома берилган кундан бошлаб 10 (ўн) кун мобайнида хакикийдир ва транспорт воситаларини техник курикдан утказиш натижаларини йул харакати хавфсизлиги давлат хизмати органларининг техник холатини текширувисиз расмийлаштириш учун асос булиб хизмат килади</p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function printed() {
                var printContents = document.getElementById('contenerPrint').innerHTML;
                var originalContents = document.body.innerHTML;

                document.body.innerHTML = printContents;

                window.print();

                document.body.innerHTML = originalContents;
            }
        </script>
    </x-app-layout>

