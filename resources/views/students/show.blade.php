@extends('admin-layout.master')
@section('title','Thong Tin Sinh Vien')
@section('content-header','Thong Tin Sinh vien')
@section('content')
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    Tên: {{$Showstudents->name}} <br>
                    Số điện thoại: {{$Showstudents->phone}} <br>
                    Tuổi: {{$Showstudents->age}} <br>
                    Giới Tính: @if ($Showstudents->gender == 0)
                    Nu
                    @elseif ($Showstudents->gender == 1)
                    Nam
                    @else
                    NOTHING
                    @endif <br>
                    Địa Chỉ: {{$Showstudents->address}} <br>
                    Trạng Thái: {{($Showstudents->is_active) ? "Kích hoạt" : "Không kích hoạt"}}
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection