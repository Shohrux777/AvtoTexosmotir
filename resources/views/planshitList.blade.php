@extends('bootstrap')
<link rel="stylesheet" href="{{url('css/client.css')}}">
<script src="{{url('js/client.js')}}"></script>
    <x-app-layout>
        <div class="list">
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
                        <a href="/planClient/{{$client->id}}"><i class="fas fa-pen"></i></a>
                        </td>
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
