@extends('dieukiens.layout')
@section('content')
<div class="container">
<div class="card" style="margin:20px;">
  <div class="card-header">Dieu Kien SHOW</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Loại : {{ $dieukien->Loai }}</h5>
        <p class="card-text">Mã HP : {{ $dieukien->MaHP }}</p>
        
        
  </div>
    </hr>
  </div>
</div>
</div>