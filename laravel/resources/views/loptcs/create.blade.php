@extends('loptcs.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Lớp TC </div>
  <div class="card-body">
      
      <form action="{{ url('loptc') }}" method="post">
        {!! csrf_field() !!}
    
        <label>Học Kỳ</label></br>
        <input type="text" name="HocKy" id="HocKy" class="form-control"></br>
        <label>Mã HP</label></br>
        <select class="form-control" name="MaHP" id="MaHP" required>
            @foreach($hocphan as $item)
                <option value="{{ $item->MaHP }}">{{ $item->TenHP}}</option>
            @endforeach
        </select>
        

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop