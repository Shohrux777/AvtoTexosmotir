@extends('bootstrap')
<link rel="stylesheet" href="css/client.css">
<script src="js/client.js"></script>
    <x-app-layout>

    <div class="">
        <div class="list_title ">
            <h2>Create client</h2>
        </div>
        <div class="">
            <div class="bg-white pt-5 overflow-hidden shadow-xl">
            <form class="p-3 max-w-7xl mx-auto" style="height: 100vh;" >

                <div class="row">
                    <div class="col-1">
                    <label for="exampleFormControlInput1" class="form-label m-0 p-0">Code</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label m-0 p-0">Familiyasi Ismi Sharifi</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="col-2">
                        <label for="exampleFormControlInput1" class="form-label m-0 p-0">Tugilgan sanasi</label>
                        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="col-3">
                        <label for="exampleFormControlInput1" class="form-label m-0 p-0">Yashash manzili</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="col-2">
                        <label for="exampleFormControlInput1" class="form-label m-0 p-0">Davlat raqami</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-3">
                        <label for="exampleFormControlInput1" class="form-label m-0 p-0">Dvigatel raqami</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="col-3">
                        <label for="exampleFormControlInput1" class="form-label m-0 p-0">Kuzov raqami</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="col-3">
                        <label for="exampleFormControlInput1" class="form-label m-0 p-0">Shosse raqami</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="col-3">
                        <label for="exampleFormControlInput1" class="form-label m-0 p-0">Avtomobil turi</label>
                        <select class="form-select" aria-label="Default select example">
                        <option selected>Avtomobil turini tanlang...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-4">
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
                        <label for="exampleFormControlInput1" class="form-label m-0 p-0">Model</label>
                        <div>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter model" list="model"  aria-label="Recipient's username" aria-describedby="button-addon2">
                                <datalist id="model">
                                <option value="BMW">
                                <option value="MRS">
                                <option value="Toyota">
                                <option value="Tesla">
                                <option value="Shevrolet">
                                </datalist>
                                <button class="btn btn-success" type="submit" id="button-addon2">Add</button>
                            </div>
                         </div>
                    </div>
                    <div class="col-3">
                        <label for="exampleFormControlInput1" class="form-label m-0 p-0">Ishlab chiqarilgan yili</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="col-3">
                        <label for="exampleFormControlInput1" class="form-label m-0 p-0">Yoqilgi turi</label>
                        <select class="form-select" id="oil" onchange="get_oil()">
                        <option selected>Yoqilg'i turini tanlang...</option>
                        <option value="benzin">Benzin</option>
                        <option value="dezil">Dezil</option>
                        <option value="spg">SPG</option>
                        <option value="smg">SMG</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-4">
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
                    <div class="col-3">
                        <label for="exampleFormControlInput1" class="form-label m-0 p-0">Telefon nomeri</label>
                        <input type="tel" max="9" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="col-3">
                        <label for="exampleFormControlInput1" class="form-label m-0 p-0">Texnik ko'rikdan o'tgan sana</label>
                        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="col-3"></div>
                </div>

                <div id="spg" class="show mt-5">
                    <!-- <h3>Gaz malumotlari</h3> -->
                    <div class="row  "  >
                        <div class="col-3">
                            <label for="exampleFormControlInput1" class="form-label m-0 p-0">Gazbalon zavod raqami</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-3">
                            <label for="exampleFormControlInput1" class="form-label m-0 p-0">Gazbalon abyomi</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-3">
                            <label for="exampleFormControlInput1" class="form-label m-0 p-0">Gazbalon vazni</label>
                            <input type="number" min="1" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-3">
                            <label for="exampleFormControlInput1" class="form-label m-0 p-0">Gazbalon ishlab chiqarilgan</label>
                            <input type="date" min="1" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-3 mt-3  ">
                            <label for="exampleFormControlInput1" class="form-label m-0 p-0">Gazbalon oxirgi sanasi</label>
                            <input type="date" min="1" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-3 mt-3">
                            <label for="exampleFormControlInput1" class="form-label m-0 p-0">Oxirgi tekshirov</label>
                            <input type="date" min="1" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>

                    </div>

                </div>
                <div class="text-right mt-4">
                    <button type="button" class="btn btn-success">Saqlash</button>
                </div>

            </form>
            </div>
        </div>
    </div>
</x-app-layout>
