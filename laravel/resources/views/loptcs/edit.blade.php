@extends('loptcs.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit LỚP TC</div>
  <div class="card-body">
      
      <form action="{{ url('loptc/' .$loptc->MaLop) }}" method="post">
        {!! csrf_field() !!}
        @method("POST")
        <input type="hidden" name="MaLop" id="MaLop" value="{{$loptc->MaLop}}" id="MaLop" />
        <label>Học Kỳ</label></br>
        <input type="text" name="HocKy" id="HocKy" value="{{$loptc->HocKy}}" class="form-control"></br>
        
        <label>Mã HP</label></br>
        <input type="hidden" name="MaHP" id="MaHP" value="{{$loptc->MaHP}}" class="form-control" />

        <select class="form-control" name="MaHP" id="MaHP" required>
            @foreach($hocphan as $item)
                <option value="{{ $item->MaHP }}">{{ $item->TenHP}}</option>
            @endforeach
        </select>


        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>