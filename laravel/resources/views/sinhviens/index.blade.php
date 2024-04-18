@extends('sinhviens.layout')
@section('content')
<div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 9 CRUD (Create, Read, Update and Delete)</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/sinhvien/create') }}" class="btn btn-success btn-sm" title="Add New Post Office">
                            Add New
                        </a>
                        <br/>
                        <br/>
                        <form action="{{ route('sinhviens.index') }}" method="GET">
                            <input type="text" name="query" style="border-radius: 7px; width: 850px; margin-right: 20px;" placeholder="Search...">
                            <button type="submit" style="background-color: red; width: 75px; height: 40px; border-radius: 6px;">Search</button>
                        </form>


                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Mã SV</th>
                                        <th>Họ và Tên</th>
                                        <th>Giới Tính</th>
                                        <th>Ngày Sinh</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($sinhvien as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->HoTen }}</td>
                                        <td>{{ $item->GioiTinh }}</td>
                                        <td>{{ $item->NgaySinh }}</td>
                                    
                                        <td>
                                            <a href="{{ url('/sinhvien/' . $item->MaSV) }}" title="View Post Office"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/sinhvien/' . $item->MaSV . '/edit') }}" title="Edit Post Office"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/sinhvien' . '/' . $item->MaSV) }}" accept-charset="UTF-8" style="display:inline">
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