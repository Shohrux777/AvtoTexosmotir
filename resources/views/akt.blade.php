@extends('bootstrap')
    <x-app-layout>
    <!-- <x-slot name="header">
        <!-- it header navigator -->
    </x-slot> -->

    <div class="">
        <div class="">
            <div class="bg-white overflow-hidden shadow-xl">
            <div class="p-3 max-w-7xl mx-auto" style="height: 100vh;" >
                <div class="title">
                    <h4>Akt sahifasi</h4>
                    <table class="table   table-hover">
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
                                    @if ($list->status == ' ')
                                    <span class="suc bg-success">Ўтди</span>
                                    @else
                                    <span class="den bg-danger">Ўтолмади</span>
                                    @endif
                                </td>
                                <td style="width:60px;">
                                <a href="/aktClient/{{$list->id}}"><i class="fas fa-eye"></i></a>
                                <a href="/aktPrint/{{$list->id}}"><i class="fas fa-pen ml-2"></i></a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

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
