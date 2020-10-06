@extends('admin-layout.master')

@section('title','Sua')

@section('content-header','Sua Thong Tin $Editstudent->name')

@section('content')
<form action="{{route('students.update',$Editstudent->id)}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{$Editstudent->name}}">
    </div>
    <div>
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" value="{{$Editstudent->phone}}">
    </div>
    <div>
        <label for="radio">Gender</label>
        <input type="radio" name="gender" id="radio" value="0" {{$Editstudent->gender === 0 ? "checked" : ""}}>Nu
        <input type="radio" name="gender" id="radio" value="1" {{$Editstudent->gender === 1 ? "checked" : ""}}>Nam
        <input type="radio" name="gender" id="radio" value="2" {{$Editstudent->gender === 2 ? "checked" : ""}}>Khac
    </div>
    <div>
        <label for="age">Age</label>
        <input type="text" name="age" id="age" value="{{$Editstudent->age}}">
    </div>
    <div>
        <label for="address">Address</label>
        <input type="text" name="address" id="address" value="{{$Editstudent->address}}">
    </div>
    <div>
        <label>Status</label>
        <input type="radio" name="is_active" id="is_active" value="0" {{$Editstudent->is_active === 0 ? "checked" : ""}}> Khong kich hoat
        <input type="radio" name="is_active" id="is_active" value="1" {{$Editstudent->is_active === 1 ? "checked" : ""}}> Kich hoat
    </div>
    <button type="submit" class="btn btn-primary">UPDATE</button>
</form>
@endsection