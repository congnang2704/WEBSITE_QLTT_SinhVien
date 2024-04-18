@extends('sinhviens.layout')
@section('content')
<div class="container">
<div class="card" style="margin:20px;">
  <div class="card-header">SINH VIEN SHOW</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Họ và Tên : {{ $sinhvien->HoTen }}</h5>
        <p class="card-text">Giới Tính : {{ $sinhvien->GioiTinh }}</p>
        <p class="card-text">Ngày Sinh : {{ $sinhvien->NgaySinh }}</p>
        
  </div>
    </hr>
  </div>
</div>
</div>