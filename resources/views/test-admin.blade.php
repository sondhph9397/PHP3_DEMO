@extends('admin-layout.master')

@section('title','Quan Tri')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Danh sach sinh vien</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <table class="table">
            <thead>
              <th>id</th>
              <th>name</th>
              <th>phone</th>
              <th>age</th>
              <th>gender</th>
              <th>address</th>
              <th>active</th>
            </thead>
            <tbody>
              @foreach($list as $li)
              <tr>
                <td>{{$li->id}}</td>
                <td>{{$li->name}}</td>
                <td>{{$li->phone}}</td>
                <td>{{$li->age}}</td>
                <td>
                  @if ($li->gender == 0)
                  Nu
                  @elseif ($li->gender == 1)
                  Nam
                  @else
                  NOTHING
                  @endif
                </td>
                <td>{{$li->address}}</td>
                <td>{{$li->is_active == 1 ? 'YES' : 'NO'}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
</div>
@endsection