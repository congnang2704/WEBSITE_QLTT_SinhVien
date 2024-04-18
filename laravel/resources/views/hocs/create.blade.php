@extends('hocs.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New HOC </div>
  <div class="card-body">
      
      <form action="{{ url('hoc') }}" method="post">
        {!! csrf_field() !!}
    
        <label>Diem QT</label></br>
        <input type="text" name="DiemQT" id="DiemQT" class="form-control"></br>
        <label>Diem CK</label></br>
        <input type="text" name="DiemCK" id="DiemCK" class="form-control"></br>
        <label>KetQua</label></br>
        <input type="text" name="KetQua" id="KetQua" class="form-control"></br>

        <label>Mã Lớp</label></br>
        <select class="form-control" name="MaLop" id="MaLop" required>
            @foreach($loptc as $item)
                <option value="{{ $item->MaLop }}">{{ $item->MaLop}}</option>
            @endforeach
        </select>

        <label>Mã Sinh Viên</label></br>
        <select class="form-control" name="MaSV" id="MaSV" required>
            @foreach($sinhvien as $item)
                <option value="{{ $item->MaSV }}">{{ $item->MaSV}}</option>
            @endforeach
        </select>
        

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop