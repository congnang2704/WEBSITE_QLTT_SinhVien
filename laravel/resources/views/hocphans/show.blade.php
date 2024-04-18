@extends('hocphans.layout')
@section('content')
<div class="container">
<div class="card" style="margin:20px;">
  <div class="card-header">Hoc Phan SHOW</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Tên HP : {{ $hocphan->TenHP }}</h5>
        <p class="card-text">Số TC : {{ $hocphan->SoTC }}</p>
        <p class="card-text">Hệ Số Cuối Kỳ : {{ $hocphan->HeSoCKy }}</p>
        
  </div>
    </hr>
  </div>
</div>
</div>