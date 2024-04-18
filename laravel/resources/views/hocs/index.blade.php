@extends('hocs.layout')
@section('content')
<div class="container">

@if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 9 CRUD (Create, Read, Update and Delete)</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/hoc/create') }}" class="btn btn-success btn-sm" title="Add New Post Office">
                            Add New
                        </a>
                        <br/>
                        <br/>
                        <form action="{{ route('hocs.index') }}" method="GET">
                            <input type="text" name="query" style="border-radius: 7px; width: 850px; margin-right: 20px;" placeholder="Search...">
                            <button type="submit" style="background-color: red; width: 75px; height: 40px; border-radius: 6px;">Search</button>
                        </form>


                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Điểm QT</th>
                                        <th>Điểm CK</th>
                                        <th>Kết Quả</th>
                                        <th>Học Kỳ</th>
                                        <th>Tên Sinh Viên</th>
                                        <!-- <th>Hệ Số Cuối Kỳ</th> -->
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($hoc as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->DiemQT }}</td>
                                        <td>{{ $item->DiemCK }}</td>
                                        <td>{{ $item->KetQua }}</td>
                                        <td>{{ $item->loptc ? $item->loptc->HocKy : 'Lỗi' }}</td>
                                        <td>{{ $item->sinhvien ? $item->sinhvien->HoTen : 'Lỗi' }}</td>
                                        <!-- <td>{{ $item->MaLop }}</td>
                                        <td>{{ $item->MaSV }}</td> -->
                                        <!-- <td>{{ $item->HeSoCKy }}</td> -->
                                    
                                        <td>
                                            <a href="{{ url('/hoc/' . $item->id) }}" title="View Post Office"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/hoc/' . $item->id . '/edit') }}" title="Edit Post Office"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/hoc' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Post Office" onclick="return confirm"(Confirm delete?)><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection