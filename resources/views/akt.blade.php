@extends('bootstrap')
<link rel="stylesheet" href="{{url('css/client.css')}}">
    <x-app-layout>


    <div class="">
        <div class="">
            <div class="list_title">
                <h2>Akt sahifasi</h2>
            </div>
            <div class="bg-white overflow-hidden shadow-xl">
            <div class=" mt-5 listMain table-responsive" >
                <div class="title">
                    <table class="table  table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th class="pl-3">Code</th>
                                <th class="pl-3">Familiyasi Ismi Sharifi</th>
                                <th class="pl-3">Yashash manzili</th>
                                <th class="pl-3">Davlat raqami</th>
                                <th class="pl-3">Telefon nomeri</th>
                                <th class="pl-3" style="width: 50px;">Натижа</th>
                                <th class="pl-3">Prin</th>
                            </tr>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>
                                    <form class="m-0" action="/name_akt" method="get">
                                        @csrf
                                        <input type="text" value="{{old('ism')}}" class="form-control" name="ism" id="Input1" placeholder="">
                                    </form>
                                </th>
                                <th style="width: 250px;">
                                    <form class="m-0" action="/manzil_akt" method="get">
                                        @csrf
                                        <input type="text" value="{{old('manzil')}}" class="form-control"  name="manzil" id="Input2" placeholder="">
                                    </form>
                                </th>
                                <th>
                                    <form class="m-0" action="/d_raqami_akt" method="get">
                                        @csrf
                                        <input type="text" class="form-control" value="{{old('d_raqam')}}" name="d_raqam" id="Input3" placeholder="">
                                    </form>
                                </th>
                                <th>
                                    <form class="m-0" action="/tel_akt" method="get">
                                        @csrf
                                        <input type="text" class="form-control" value="{{old('tel')}}" name="tel" id="Input4" placeholder="">
                                    </form>
                                </th>
                                <th style="width: 80px;">
                                </th>
                                <th style="width: 70px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($lists as $list)

                            <tr>
                                <th>{{$list->id}}</th>
                                <td class="pl-3">{{$list->code}}/2021</td>
                                <td class="pl-3">{{$list->name}}</td>
                                <td class="pl-3">{{$list->manzil}}</td>
                                <td class="pl-3">{{$list->d_raqami}}</td>
                                <td class="pl-3">{{$list->t_number}}</td>
                                <td  class="text-center">
                                    @if ($list->status == 't')
                                    <span class="px-3 suc bg-success">Ўтди</span>
                                    @else
                                    <span class="den bg-danger">Ўтолмади</span>
                                    @endif
                                </td>
                                <td style="width:60px;" >
                                <div class="d-flex justify-content-between">
                                    <a href="/aktClient/{{$list->id}}"><i class="fas fa-eye"></i></a>
                                    <a href="/aktPrint/{{$list->id}}"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer" width="19" height="19" viewBox="0 0 24 24" stroke-width="2.5" stroke="#00b341" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                                        <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                                        <rect x="7" y="13" width="10" height="8" rx="2" />
                                      </svg></a>
                                </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div class="paginations d-flex justify-content-center mt-4">
                        {{$lists->links()}}
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <style>
        .suc, .den{
            font-size: 10px;
            padding: 2px 5px;
            color:white;
            font-weight: 550;
            border-radius: 3px;
            box-shadow: 1px 1px 10px rgb(201, 201, 201), -1px -1px 10px rgb(201, 201, 201);
        }
    </style>
</x-app-layout>
