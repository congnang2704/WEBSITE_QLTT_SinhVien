<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Website  Thông Tin Sinh Viên</title>
    <style>
        @charset 'utf-8';

        body {
            margin: 0;
            padding: 0;
        }

        .main {
            width: 96%;
            height: auto;
            margin-left: 2%;
            margin-right: 2%;
            margin: auto;
            border-radius: 10px;
        }

    

        

        /* menu ngang */
        .menu-ngang {
            width: 100%;
            height: 60px;
            background: rgb(84, 80, 255);
            border-radius: 10px;
        }

        .menu-ngang ul {
            text-align: right;
            margin-right: 20px;
            list-style-type: none;
            color: #fff;
        }

        .menu-ngang ul li {
            display: inline-table;
            width: auto;
            height: 40px;
            line-height: 60px;
            margin-left: 2%;
            position: relative;
        }

        .menu-ngang ul li a {
            text-decoration: none;
            color: #fff;
            display: block;
        }

        .menu-ngang ul li :hover {
            color: aqua;
            background: #645f5f;
            border-radius: 3px;
        }

        .conten {
            width: 100%;
            height: auto;
            display: flex;
            border-radius: 10px;
        }

        /* menu left */
        .menu-left {
            width: 20%;
            height: auto;
            background: #26a0da;
            border-radius: 10px;
        }


        .menu-left ul {
            text-align: center;
            list-style-type: none;
            color: #fff;
        }

        .menu-left ul li {
            display: block;
            width: 180px;
            height: 40px;
            line-height: 40px;
            position: relative;
        }

        .menu-left ul li a {
            text-decoration: none;
            color: #666;
            display: block;
        }

        .menu-left ul li :hover {
            color: aqua;
            background: #ff2100;
            border-radius: 3px;
        }

        /* .menu-left{
        float: left;
        width: 15%;
        height: auto;
        background-color: bisque;
        } */
        .center {
            float: left;
            width: 80%;
            height: auto;
            background-color: #26a0da;
            border-radius: 10px;

        }

        .right {
            float: left;
            width: 20%;
            height: auto;
            background-color: #26a0da;
        }

        
        </style>
</head>
<?php

?>

<body>

<div class="main" style="margin-top: 2px;">

<div class="conten">
    <div class="menu-left">
        <nav>
            <ul class="menu_top">
                <li><a href="/">Trang chủ</a></li>
                <li><a href="{{  url('/hp') }}" >Thông Tin Học Phần</a></li>
                <li><a href="{{  url('/dk') }}" >Thông Tin Điều Kiện</a></li>
                <li><a href="{{  url('/ltc') }}" >Thông Tin Lớp TC</a></li>
                <li><a href="{{  url('/sv') }}" >Thông Tin Sinh Viên</a></li>
                <li><a href="{{  url('/hc') }}" >Thông Tin Hoc</a></li>
            </ul>
        </nav>
    </div>
    <div class="center">
        <div class="menu-ngang">
            <nav>
                <ul class="menu_top">
                    @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                        @auth
                        <li><a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a></li>
                        @else
                        <li><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>

                        @if (Route::has('register'))<li><a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                                @endif
                                @endauth
                            </div>
                            @endif
                        </ul>
                    </nav>
                </div>
                <div class="center">

                    <div class="container">
                        <div class="row" style="margin:20px;">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                        
                                        <h1 style="color: red;">Thông Tin Sinh Viên Của Sinh Viên</h1>
                                        <form action="{{ route('hienthi.hienthiSV') }}" method="GET">
                                            <input type="text" name="query" style="border-radius: 7px; width: 650px; height:40px; margin-right: 20px;" placeholder="Search...">
                                            <button type="submit" style="background-color: red; width: 75px; height: 40px; border-radius: 6px;">Search</button>
                                        </form>
                                            <br/>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Mã SV</th>
                                                        <th>Họ và Tên</th>
                                                        <th>Giới Tính</th>
                                                        <th>Ngày Sinh</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($sv as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->HoTen }}</td>
                                                        <td>{{ $item->GioiTinh }}</td>
                                                        <td>{{ $item->NgaySinh }}</td>
                                                    
                                                        
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        
    </div>
    </div>
</body>

</html>