<!-- kế thừa view master trong student-layout/master.blade.php -->
@extends('student-layout.master')

<!-- thay đổi nội dung đơn giản -->
@section('title','Danh Sach')

@section('header','Danh sách sinh viên')
<!-- thay đổi nội dung phức tạp -->
@section('content')
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
@endsection

@section('footer','footer list')