@extends('books.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit BOOKS</div>
  <div class="card-body">
      
      <form action="{{ url('book/' .$book->bookid) }}" method="post">
        {!! csrf_field() !!}
        @method("POST")
        <input type="hidden" name="bookid" id="bookid" value="{{$book->bookid}}" id="bookid" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$book->name}}" class="form-control"></br>
        <label>Publisher</label></br>
        <input type="text" name="publisher" id="publisher" value="{{$book->publisher}}" class="form-control"></br>
        <label>Author</label></br>
        <input type="text" name="author" id="author" value="{{$book->author}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>