@extends('dieukiens.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Điều Kiện </div>
  <div class="card-body">
      
      <form action="{{ url('dieukien') }}" method="post">
        {!! csrf_field() !!}
    
        <label>Loai</label></br>
        <input type="text" name="Loai" id="Loai" class="form-control"></br>
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