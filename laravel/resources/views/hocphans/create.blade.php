@extends('hocphans.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New HOC PHAN</div>
  <div class="card-body">
       
      <form action="{{ url('hocphan') }}" method="post">
        {!! csrf_field() !!}
     
        <label>Tên HP</label></br>
        <input type="text" name="TenHP" id="TenHP" class="form-control"></br>
        <label>Số TC</label></br>
        <input type="text" name="SoTC" id="SoTC" class="form-control"></br>
        <label>Hệ Số Cuối Kỳ</label></br>
        <input type="text" name="HeSoCKy" id="HeSoCKy" class="form-control"></br>
       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop