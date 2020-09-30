@extends('student-layout.login-layout')
@section('title', 'Đăng nhập')
@section('header','Mời Đăng Nhập')
@section('content')
    <form action="{{route('post-login')}}" method="POST">
        @csrf
        <input type="text" name="username" placeholder=username><br>
        <input type="password" name="password" placeholder="password"><br>
        <button type="submit">login</button>
    </form>

@endsection
@section('footer','Footer extends login')