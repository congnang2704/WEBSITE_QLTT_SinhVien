@extends('dieukiens.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit DIEU KIEN</div>
  <div class="card-body">
       
      <form action="{{ url('dieukien/' .$dieukien->MaHPDK) }}" method="post">
        {!! csrf_field() !!}
        @method("POST")
        <input type="hidden" name="MaHPDK" id="MaHPDK" value="{{$dieukien->MaHPDK}}" id="MaHPDK" />
        <label>Loại</label></br>
        <input type="text" name="Loai" id="Loai" value="{{$dieukien->Loai}}" class="form-control"></br>
        
        <label>Mã HP</label></br>
        <input type="hidden" name="MaHP" id="MaHP" value="{{$dieukien->MaHP}}" class="form-control" />

        <select class="form-control" name="MaHP" id="MaHP" required>
            @foreach($hocphan as $item)
                <option value="{{ $item->MaHP }}">{{ $item->TenHP}}</option>
            @endforeach
        </select>


        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>