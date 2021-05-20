@extends('bootstrap')
<link rel="stylesheet" href="{{url('css/client.css')}}">
<script src="{{url('js/client.js')}}"></script>
    <x-app-layout>

    <div class="">
        <div class="list_title ">
            <h2>Client edit</h2>
        </div>

        <div class="bg-white">
            @if(Session::get('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{Session::get('fail')}}
                </div>
            @endif
            <div class="bg-white pt-5 overflow-hidden shadow-xl">
            <form action="update_client" method="post" class="p-3 max-w-7xl mx-auto" style="height: 100vh;" >

            @csrf
                <input type="hidden" value="{{$edits->id}}" name="id">
                <div class="row">
                    <div class="col-1">
                    <label for="codes" class="form-label m-0 p-0">Code</label>
                    <input type="text" value="{{$edits->id}}" class="form-control" id="codes" name="code" placeholder="">
                    </div>
                    <div class="col-4">
                        <label for="fish" class="form-label m-0 p-0">Familiyasi Ismi Sharifi</label>
                        <input type="text" value="{{$edits->name}}" class="form-control" id="fish" name="name" value="{{old('name')}}" placeholder="">
                        <span style="color:red; font-size: 14px;">@error('name'){{$message}} @enderror</span>

                    </div>
                    <div class="col-2">
                        <label for="day" class="form-label m-0 p-0">Tugilgan sanasi</label>
                        <input type="date" value="{{$edits->sana}}" class="form-control" id="day" name="sana" value="{{old('sana')}}" placeholder="">
                        <span style="color:red; font-size: 14px;">@error('sana'){{$message}} @enderror</span>
                    </div>
                    <div class="col-3">
                        <label for="location" class="form-label m-0 p-0">Yashash manzili</label>
                        <input type="text" value="{{$edits->manzil}}" class="form-control" id="location" name="manzil" value="{{old('manzil')}}" placeholder="">
                        <span style="color:red; font-size: 14px;">@error('manzil'){{$message}} @enderror</span>
                    </div>
                    <div class="col-2">
                        <label for="davlat_raqam" class="form-label m-0 p-0">Davlat raqami</label>
                        <input type="text" value="{{$edits->d_raqami}}" class="form-control" id="davlat_raqam" name="d_raqami" value="{{old('d_raqami')}}" placeholder="">
                        <span style="color:red; font-size: 14px;">@error('d_raqami'){{$message}} @enderror</span>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-3">
                        <label for="dvigatel_raqami" class="form-label m-0 p-0">Dvigatel raqami</label>
                        <input type="text" value="{{$edits->dv_raqami}}" class="form-control" id="dvigatel_raqami" name="dv_raqami" value="{{old('dv_raqami')}}" placeholder="">
                        <span style="color:red; font-size: 14px;">@error('dv_raqami'){{$message}} @enderror</span>
                    </div>
                    <div class="col-3">
                        <label for="kuzov_raqami" class="form-label m-0 p-0">Kuzov raqami</label>
                        <input type="text" value="{{$edits->kuzov}}" class="form-control" id="kuzov_raqami" name="kuzov" value="{{old('kuzov')}}" placeholder="">
                        <span style="color:red; font-size: 14px;">@error('kuzov'){{$message}} @enderror</span>
                    </div>
                    <div class="col-3">
                        <label for="shosse_raqami" class="form-label m-0 p-0">Shosse raqami</label>
                        <input type="text" value="{{$edits->sh_raqami}}" class="form-control" id="shosse_raqami" name="sh_raqami" value="{{old('sh_raqami')}}" placeholder="">
                        <span style="color:red; font-size: 14px;">@error('sh_raqami'){{$message}} @enderror</span>
                    </div>
                    <div class="col-3">
                        <label for="avtamobil_turi" class="form-label m-0 p-0">Avtomobil turi</label>
                        <select class="form-select"  name="avto_turi" aria-label="Default select example">
                        <option selected>{{$edits->avto_turi}}</option>
                        <option value="one">One</option>
                        <option value="two">Two</option>
                        <option value="three">Three</option>
                        </select>
                        <span style="color:red; font-size: 14px;">@error('avto_turi'){{$message}} @enderror</span>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-3">
                        <label for="rusumi" class="form-label m-0 p-0">Rusumi</label>
                        <select class="form-select" name="rusumi" aria-label="Default select example">
                        <option selected>{{$edits->rusumi}}</option>
                        <option value="malibu">Malibu</option>
                        <option value="Nexia 2">Nexia 2</option>
                        <option value="Spark">Spark</option>
                        </select>
                    </div>

                    <div class="col-3">
                        <label for="model" class="form-label m-0 p-0">Model</label>
                        <div>
                            <div class="input-group">
                                <input type="text" class="form-control" value="{{$edits->model}}" name="model" placeholder="Enter model" list="model"  aria-label="Recipient's username" aria-describedby="button-addon2">
                                <datalist id="model">
                                <option value="BMW">
                                <option value="MRS">
                                <option value="Toyota">
                                <option value="Tesla">
                                <option value="Shevrolet">
                                </datalist>
                                <button class="btn btn-success" type="button" id="button-addon2">Add</button>
                            </div>
                         </div>
                    </div>
                    <div class="col-3">
                        <label for="ishlab_chiqarilgan_yili" class="form-label m-0 p-0">Ishlab chiqarilgan yili</label>
                        <input type="text" class="form-control" id="ishlab_chiqarilgan_yili" value="{{$edits->ishlab_sana}}" name="ishlab_sana" placeholder="">
                    </div>
                    <div class="col-3">
                        <label for="yoqilgi_turi" class="form-label m-0 p-0">Yoqilgi turi</label>
                        <select class="form-select" name="yoqilgi_turi" id="oil" onchange="get_oil()">
                        <option selected>{{$edits->yoqilgi_turi}}</option>
                        <option value="benzin">Benzin</option>
                        <option value="dezil">Dezil</option>
                        <option value="spg">SPG</option>
                        <option value="smg">SMG</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-3">
                        <label for="rangi" class="form-label m-0 p-0">Rangi</label>
                        <input class="form-control" name="rangi" value="{{$edits->rangi}}" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                        <datalist id="datalistOptions">
                        <option value="Oq">
                        <option value="Qora">
                        <option value="Ko'k">
                        <option value="Yashil">
                        <option value="Sariq">
                        </datalist>
                    </div>
                    <div class="col-3">
                        <label for="texnik_passport" class="form-label m-0 p-0">Texnik pasporti</label>
                        <input type="text" class="form-control" value="{{$edits->texnik_pass}}" id="texnik_passport" name="texnik_pass" placeholder="">
                    </div>
                    <div class="col-3">
                        <label for="telefon_nomeri" class="form-label m-0 p-0">Telefon nomeri</label>
                        <input type="tel" max="9" class="form-control" value="{{$edits->t_number}}" id="telefon_nomeri" name="t_number" placeholder="">
                    </div>
                    <div class="col-3">
                        <label for="texnik_kurik_sana" class="form-label m-0 p-0">Texnik ko'rikdan o'tgan sana</label>
                        <input type="date" class="form-control" value="{{$edits->tex_otgan_sana}}" id="texnik_kurik_sana" name="tex_otgan_sana" placeholder="">
                    </div>
                    <div class="col-3"></div>
                </div>

                <div id="spg" class="show mt-5">
                    <!-- <h3>Gaz malumotlari</h3> -->
                    <div class="row  "  >
                        <div class="col-3">
                            <label for="gaz_balon_raqami" class="form-label m-0 p-0">Gazbalon zavod raqami</label>
                            <input type="text" class="form-control" value="{{$edits->gaz_raqam}}" id="gaz_balon_raqami" name="gaz_raqam" placeholder="">
                        </div>
                        <div class="col-3">
                            <label for="gazbalon_abyom" class="form-label m-0 p-0">Gazbalon abyomi</label>
                            <input type="text" class="form-control" value="{{$edits->gaz_abyom}}" id="gazbalon_abyom" name="gaz_abyom" placeholder="">
                        </div>
                        <div class="col-3">
                            <label for="gazbalon_vazni" class="form-label m-0 p-0">Gazbalon vazni</label>
                            <input type="number" min="1" class="form-control" value="{{$edits->gaz_vazn}}" id="gazbalon_vazni" name="gaz_vazn" placeholder="">
                        </div>
                        <div class="col-3">
                            <label for="gaz_ishlab_chiqarilgan" class="form-label m-0 p-0">Gazbalon ishlab chiqarilgan</label>
                            <input type="date" min="1" class="form-control" value="{{$edits->gaz_ishlab_chiq}}" id="gaz_ishlab_chiqarilgan" name="gaz_ishlab_chiq" placeholder="">
                        </div>
                        <div class="col-3 mt-3  ">
                            <label for="gaz_oxirgi_sana" class="form-label m-0 p-0">Gazbalon oxirgi sanasi</label>
                            <input type="date" min="1" class="form-control" value="{{$edits->gaz_oxir_sana}}" id="gaz_oxirgi_sana" name="gaz_oxir_sana" placeholder="">
                        </div>
                        <div class="col-3 mt-3">
                            <label for="oxirgi_tekshirov" class="form-label m-0 p-0">Oxirgi tekshirov</label>
                            <input type="date" min="1" class="form-control" value="{{$edits->oxirgi_tek}}" id="oxirgi_tekshirov" name="oxirgi_tek" placeholder="">
                        </div>

                    </div>

                </div>
                <div class="text-right mt-4">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>

            </form>

            </div>
        </div>
    </div>
</x-app-layout>
