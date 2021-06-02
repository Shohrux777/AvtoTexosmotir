@extends('bootstrap')
<link rel="stylesheet" href="{{url('css/client.css')}}">
<script src="{{url('js/client.js')}}"></script>
    <x-app-layout>
        <div class="list bg-white shadow" style="height: 100%;">
            <div class="list_title">
                <h2>Planshit List</h2>
            </div>
            <div class="listMain mt-5  table-responsive" >
                <table class="table   table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Code</th>
                            <th>Familiyasi Ismi Sharifi</th>
                            <th>Yashash manzili</th>
                            <th>Davlat raqami</th>
                            <th>Telefon nomeri</th>
                            <th style="width: 50px;">Sms</th>
                            <th>Prin</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </th>
                            <th>
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
                    @foreach($plan_clients as $client)
                    <tr>
                        <th>{{$client['id']}}</th>
                        <td>{{$client['code']}}/2021</td>
                        <td>{{$client['name']}}</td>
                        <td>{{$client['manzil']}}</td>
                        <td>{{$client['d_raqami']}}</td>
                        <td>{{$client['t_number']}}</td>
                        <td>none</td>
                        <td style="width:60px;">
                        <div class="d-flex justify-content-center">
                            <a href="/planClient/{{$client->id}}"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="#00bfd8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                                <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                                <line x1="16" y1="5" x2="19" y2="8" />
                              </svg></a>
                            </td>
                        </div>
                    </tr>
                    @endforeach

                    </tbody>
                </table>

                <div class="paginations d-flex justify-content-center mt-4">
                    {{$plan_clients->links()}}
                </div>
            </div>
        </div>

    </x-app-layout>
