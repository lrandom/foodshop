@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Bordered Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>                  
          <tr>
            <th style="width: 10px">#</th>
            <th>Email</th>
            <th>Name</th>
            <th style="width: 40px">Thao tác</th>
          </tr>
        </thead>
        <tbody>
           @foreach ($list as $r)
               <tr>
                   <td>{{ $r->id }}</td>
                   <td>{{ $r->name }}</td>
                   <td>{{ $r->email }}</td>
                   <td>
                       <a href="" class="btn btn-danger">Xoá</a>
                       <a href="" class="btn btn-warning">Sửa</a>
                   </td>
               </tr>
           @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
       {{ $list->links() }}
    </div>
  </div>
@endsection