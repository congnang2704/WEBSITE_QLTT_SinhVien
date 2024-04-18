@extends('sinhviens.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New SINH VIEN</div>
  <div class="card-body">
       
      <form action="{{ url('sinhvien') }}" method="post">
        {!! csrf_field() !!}
     
        <label>Họ và Tên</label></br>
        <input type="text" name="HoTen" id="HoTen" class="form-control"></br>
        <label>Giới Tính</label></br>
        <input type="text" name="GioiTinh" id="GioiTinh" class="form-control"></br>
        <label>Ngày Sinh</label></br>
        <input type="text" name="NgaySinh" id="NgaySinh" class="form-control"></br>
       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop