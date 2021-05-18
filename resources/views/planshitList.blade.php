@extends('bootstrap')
<link rel="stylesheet" href="css/client.css">
<script src="js/client.js"></script>
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
                            <th>Write</th>
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
                    <tr>
                            <th>1</th>
                            <td>1036/2021</td>
                            <td>Сейитназаров Хайрулла</td>
                            <td>Кирккиз ОФЙ</td>
                            <td>95L998CA</td>
                            <td>99-944-46-02</td>
                            <td>0</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{url('planshit')}}"><i class="fas fa-pen text-success" style="font-size: 14px;"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>1037/2021</td>
                            <td>Халлиев Туребай</td>
                            <td>Турткул тумани А Дурдиев</td>
                            <td>95Y726DA</td>
                            <td>93-363-00-91</td>
                            <td>0</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{url('planshit')}}"><i class="fas fa-pen text-success" style="font-size: 14px;"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>1036/2021</td>
                            <td>Сейитназаров Хайрулла</td>
                            <td>Кирккиз ОФЙ</td>
                            <td>95L998CA</td>
                            <td>99-944-46-02</td>
                            <td>0</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{url('planshit')}}"><i class="fas fa-pen text-success" style="font-size: 14px;"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th>4</th>
                            <td>1037/2021</td>
                            <td>Халлиев Туребай</td>
                            <td>Турткул тумани А Дурдиев</td>
                            <td>95Y726DA</td>
                            <td>93-363-00-91</td>
                            <td>0</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{url('planshit')}}"><i class="fas fa-pen text-success" style="font-size: 14px;"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th>5</th>
                            <td>1036/2021</td>
                            <td>Сейитназаров Хайрулла</td>
                            <td>Кирккиз ОФЙ</td>
                            <td>95L998CA</td>
                            <td>99-944-46-02</td>
                            <td>0</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{url('planshit')}}"><i class="fas fa-pen text-success" style="font-size: 14px;"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th>6</th>
                            <td>1037/2021</td>
                            <td>Халлиев Туребай</td>
                            <td>Турткул тумани А Дурдиев</td>
                            <td>95Y726DA</td>
                            <td>93-363-00-91</td>
                            <td>0</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{url('planshit')}}"><i class="fas fa-pen text-success" style="font-size: 14px;"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th>7</th>
                            <td>1036/2021</td>
                            <td>Сейитназаров Хайрулла</td>
                            <td>Кирккиз ОФЙ</td>
                            <td>95L998CA</td>
                            <td>99-944-46-02</td>
                            <td>0</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{url('planshit')}}"><i class="fas fa-pen text-success" style="font-size: 14px;"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th>8</th>
                            <td>1037/2021</td>
                            <td>Халлиев Туребай</td>
                            <td>Турткул тумани А Дурдиев</td>
                            <td>95Y726DA</td>
                            <td>93-363-00-91</td>
                            <td>0</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{url('planshit')}}"><i class="fas fa-pen text-success" style="font-size: 14px;"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="paginations d-flex justify-content-center mt-4">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item ">
                            <span class="page-link">Previous</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                            <span class="page-link">2</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </x-app-layout>
