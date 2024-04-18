@extends('books.layout')
@section('content')
<div class="container">
<div class="card" style="margin:20px;">
  <div class="card-header">BOOK  SHOW</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $book->name }}</h5>
        <p class="card-text">Publisher : {{ $book->publisher }}</p>
        <p class="card-text">Author : {{ $book->author }}</p>
        
  </div>
    </hr>
  </div>
</div>
</div>