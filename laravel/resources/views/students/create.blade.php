@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Students</div>
  <div class="card-body">
       
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
     
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>IMG</label></br>
        <input type="text" name="img" id="img" class="form-control"></br>
        <label>Detail</label></br>
        <input type="text" name="detail" id="detail" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop