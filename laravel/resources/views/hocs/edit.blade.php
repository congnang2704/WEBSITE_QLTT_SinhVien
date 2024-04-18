@extends('hocs.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit HOC</div>
  <div class="card-body">
       
      <form action="{{ url('hoc/' .$hoc->id) }}" method="post">
        {!! csrf_field() !!}
        @method("POST")
        <input type="hidden" name="id" id="id" value="{{$hoc->id}}" id="id" />
        <label>Điểm QT</label></br>
        <input type="text" name="DiemQT" id="DiemQT" value="{{$hoc->DiemQT}}" class="form-control"></br>
        <label>Điểm CK</label></br>
        <input type="text" name="DiemCK" id="DiemCK" value="{{$hoc->DiemCK}}" class="form-control"></br>
        <label>Kết Qua</label></br>
        <input type="text" name="KetQua" id="KetQua" value="{{$hoc->KetQua}}" class="form-control"></br>
        
        <label>Mã Lớp</label></br>
        <input type="hidden" name="MaLop" id="MaLop" value="{{$hoc->MaLop}}" class="form-control" />

        <select class="form-control" name="MaLop" id="MaLop" required>
            @foreach($loptc as $item)
                <option value="{{ $item->MaLop }}">{{ $item->MaLop}}</option>
            @endforeach
        </select>

        <label>Mã Sinh Viên</label></br>
        <input type="hidden" name="MaSV" id="MaSV" value="{{$hoc->MaSV}}" class="form-control" />

        <select class="form-control" name="MaSV" id="MaSV" required>
            @foreach($sinhvien as $item)
                <option value="{{ $item->MaSV }}">{{ $item->MaSV}}</option>
            @endforeach
        </select>


        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>