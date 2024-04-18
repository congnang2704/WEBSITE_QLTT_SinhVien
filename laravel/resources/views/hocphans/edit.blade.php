@extends('hocphans.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit HOC PHAN</div>
  <div class="card-body">
      
      <form action="{{ url('hocphan/' .$hocphan->MaHP) }}" method="post">
        {!! csrf_field() !!}
        @method("POST")
        <input type="hidden" name="MaHP" id="MaHP" value="{{$hocphan->MaHP}}" id="MaHP" />
        <label>Tên HP</label></br>
        <input type="text" name="TenHP" id="TenHP" value="{{$hocphan->TenHP}}" class="form-control"></br>
        <label>Số TC</label></br>
        <input type="text" name="SoTC" id="SoTC" value="{{$hocphan->SoTC}}" class="form-control"></br>
        <label>Hệ Số Cuối Kỳ</label></br>
        <input type="text" name="HeSoCKy" id="HeSoCKy" value="{{$hocphan->HeSoCKy}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>