@extends('loptcs.layout')
@section('content')
<div class="container">
<div class="card" style="margin:20px;">
  <div class="card-header">LỚP SHOW</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Học Kỳ : {{ $loptc->HocKy }}</h5>
        <p class="card-text">Mã HP : {{ $loptc->MaHP }}</p>
      
        
  </div>
    </hr>
  </div>
</div>
</div>