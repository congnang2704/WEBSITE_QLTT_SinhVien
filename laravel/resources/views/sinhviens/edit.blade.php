@extends('sinhviens.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit SINH VIEN</div>
  <div class="card-body">
       
      <form action="{{ url('sinhvien/' .$sinhvien->MaSV) }}" method="post">
        {!! csrf_field() !!}
        @method("POST")
        <input type="hidden" name="MaSV" id="MaSV" value="{{$sinhvien->MaSV}}" id="MaSV" />
        <label>Họ và Tên</label></br>
        <input type="text" name="HoTen" id="HoTen" value="{{$sinhvien->HoTen}}" class="form-control"></br>
        <label>Giới Tính</label></br>
        <input type="text" name="GioiTinh" id="GioiTinh" value="{{$sinhvien->GioiTinh}}" class="form-control"></br>
        <label>Ngày Sinh</label></br>
        <input type="text" name="NgaySinh" id="NgaySinh" value="{{$sinhvien->NgaySinh}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>