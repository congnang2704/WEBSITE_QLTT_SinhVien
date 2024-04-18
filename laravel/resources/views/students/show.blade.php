@extends('students.layout')
@section('content')
<div class="container">
<div class="card" style="margin:20px;">
  <div class="card-header">Students Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">IMG : <img src="{{ $students->img}}" alt=""></p>
        <p class="card-text">Detail : {{ $students->detail }}</p>
  </div>
    </hr>
  </div>
</div>
</div>