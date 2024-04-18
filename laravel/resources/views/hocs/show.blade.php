@extends('hocs.layout')
@section('content')
<div class="container">
<div class="card" style="margin:20px;">
  <div class="card-header">HOC SHOW</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Show Điểm</h5>
        <h5 class="card-title">Diem QT : {{ $hoc->DiemQT }}</h5>
        <h5 class="card-title">Diem CK : {{ $hoc->DiemCK }}</h5>
        <h5 class="card-title">KetQua : {{ $hoc->KetQua }}</h5>
        <p class="card-text">Mã Lớp : {{ $hoc->MaLop }}</p>
        <p class="card-text">Mã Sinh Viên : {{ $hoc->MaSV }}</p>
      
        
  </div>
    </hr>
  </div>
</div>
</div>