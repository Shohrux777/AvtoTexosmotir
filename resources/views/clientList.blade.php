@extends('bootstrap')
<link rel="stylesheet" href="{{url('css/client.css')}}">
<script src="{{url('js/client.js')}}"></script>
    <x-app-layout>
        <div class="list bg-white shadow" >
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
                                <form class="m-0" action="/clientList" method="get">
                                    @csrf
                                    <input type="text" class="form-control" name="ism" value="{{old('ism')}}" id="Input1" placeholder="">
                                </form>
                            </th>
                            <th style="width: 300px;">
                                <form class="m-0" action="/manzil_search" method="get">
                                    @csrf
                                    <input type="text" class="form-control"  name="manzil" id="Input2" placeholder="">
                                </form>
                            </th>
                            <th>
                                <form class="m-0" action="/d_raqami_search" method="get">
                                    @csrf
                                    <input type="text" class="form-control" name="d_raqam" id="Input3" placeholder="">
                                </form>
                            </th>
                            <th>
                                <form class="m-0" action="/tel_search" method="get">
                                    @csrf
                                    <input type="text" class="form-control" name="tel" id="Input4" placeholder="">
                                </form>
                                </th>
                            <th style="width: 80px;">
                                <input type="text" class="form-control" id="Input5" placeholder="">
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
                        <td style="width:75px;">
                        <div class="d-flex justify-content-between">
                            <a href="showClients/{{$client->id}}"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye-check" width="19" height="19" viewBox="0 0 24 24" stroke-width="2.5" stroke="#ff9300" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <circle cx="12" cy="12" r="2" />
                                <path d="M12 19c-4 0 -7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7c-.42 .736 -.858 1.414 -1.311 2.033" />
                                <path d="M15 19l2 2l4 -4" />
                              </svg></a>
                            {{-- <a href="/print/{{$client->id}}"><i class="fas fa-print"></i></a> --}}
                            <a href="/editClient/{{$client->id}}"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="19" height="19" viewBox="0 0 24 24" stroke-width="2.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                                <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                                <line x1="16" y1="5" x2="19" y2="8" />
                              </svg></a>
                        </div>
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
