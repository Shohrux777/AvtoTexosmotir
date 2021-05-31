@extends('bootstrap')
<link rel="stylesheet" href="{{url('css/client.css')}}">
<script src="{{url('js/client.js')}}"></script>
    <x-app-layout>
        <div class="list">
            <div class="list_title">
                <h2>Show Client</h2>
            </div>
            <div class=" mt-4 container table-responsive" >
                <h2 class="mb-3">{{$shows->name}}</h2>
                <a href="/editClient/{{$shows->id}}"><button  class="btn btn-success">Update</button></a>
                <a href="/delete/{{$shows->id}}"><button  class="btn btn-danger">Delete</button></a>
                <table class="table table-bordered ">
                    <tr>
                        <th>Code</th>
                        <td>{{$shows->id}}</td>
                    </tr>
                    <tr>
                        <th>Familiyasi Ismi Sharifi</th>
                        <td>{{$shows->name}}</td>
                    </tr>
                    <tr>
                        <th>Tugilgan sanasi</th>
                        <td>{{$shows->sana}}</td>
                    </tr>
                    <tr>
                        <th>Yashash manzili</th>
                        <td>{{$shows->manzil}}</td>
                    </tr>
                    <tr>
                        <th>Davlat raqami</th>
                        <td>{{$shows->d_raqami}}</td>
                    </tr>
                    <tr>
                        <th>Dvigatel raqami</th>
                        <td>{{$shows->dv_raqami}}</td>
                    </tr>
                    <tr>
                        <th>Kuzov raqami</th>
                        <td>{{$shows->kuzov}}</td>
                    </tr>
                    <tr>
                        <th>Shosse raqami</th>
                        <td>{{$shows->sh_raqami}}</td>
                    </tr>
                    <tr>
                        <th>Rusumi</th>
                        <td>{{$shows->rusumi}}</td>
                    </tr>
                    <tr>
                        <th>Rangi</th>
                        <td>{{$shows->rangi}}</td>
                    </tr>
                    <tr>
                        <th>Ishlab chiqarilgan yili</th>
                        <td>{{$shows->ishlab_sana}}</td>
                    </tr>
                    <tr>
                        <th>Yoqilgi turi</th>
                        <td>{{$shows->yoqilgi_turi}}</td>
                    </tr>
                    <tr>
                        <th>Texnik pasporti</th>
                        <td>{{$shows->texnik_pass}}</td>
                    </tr>
                    <tr>
                        <th>Telefon nomeri</th>
                        <td>{{$shows->t_number}}</td>
                    </tr>
                    @if($shows->yoqilgi_turi =='spg' || $shows->yoqilgi_turi == 'smg')
                    <tr>
                        <th>Gazbalon zavod raqami</th>
                        <td>{{$shows->gaz_raqam}}</td>
                    </tr>
                    <tr>
                        <th>Gazbalon abyomi</th>
                        <td>{{$shows->gaz_abyom}}</td>
                    </tr>
                    <tr>
                        <th>Gazbalon vazni</th>
                        <td>{{$shows->gaz_vazn}}</td>
                    </tr>
                    <tr>
                        <th>Gazbalon ishlab chiqarilgan</th>
                        <td>{{$shows->gaz_ishlab_chiq}}</td>
                    </tr>
                    <tr>
                        <th>Gazbalon oxirgi sanasi</th>
                        <td>{{$shows->gaz_oxir_sana}}</td>
                    </tr>
                    @endif
                </table>
            </div>
        </div>
        <style>
            tr, th{
                font-size: 14px;
            }
        </style>
    </x-app-layout>
