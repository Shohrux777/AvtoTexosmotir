@extends('bootstrap')
<link rel="stylesheet" href="{{url('css/client.css')}}">
<script src="{{url('js/client.js')}}"></script>
    <x-app-layout>
        <div class="list">
            <div class="list_title">
                <h2>Clients</h2>
                <div class="list_icon">
                    <a href="{{url('clients')}}">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            </div>
            <div class="listMain mt-5  table-responsive" >
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="pl-3">Code</th>
                            <th class="pl-3">Familiyasi Ismi Sharifi</th>
                            <th class="pl-3">Yashash manzili</th>
                            <th class="pl-3">Davlat raqami</th>
                            <th class="pl-3">Telefon nomeri</th>
                            <th class="pl-3" style="width: 50px;">Sms</th>
                            <th class="pl-3">Prin</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </th>
                            <th style="width: 300px;">
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </th>
                            <th>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </th>
                            <th>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </th>
                            <th style="width: 80px;">
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </th>
                            <th style="width: 70px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($clients as $client)
                    <tr>
                        <th>{{$client['id']}}</th>
                        <td class="pl-3">{{$client['code']}}/2021</td>
                        <td class="pl-3">{{$client['name']}}</td>
                        <td class="pl-3">{{$client['manzil']}}</td>
                        <td class="pl-3">{{$client['d_raqami']}}</td>
                        <td class="pl-3">{{$client['t_number']}}</td>
                        <td>none</td>
                        <td style="width:85px;">
                        <a href="showClients/{{$client->id}}"><i  class="fas fa-eye"></i></a>
                        <a href="/print/{{$client->id}}"><i class="fas fa-print"></i></a>
                        <a href="/editClient/{{$client->id}}"><i class="fas fa-pen"></i></a>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>

                <div class="paginations d-flex justify-content-center mt-4">
                    {{$clients->links()}}
                </div>
            </div>
        </div>

    </x-app-layout>
