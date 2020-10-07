@extends('admin-layout.master')

@section('title','Them')

@section('content-header','Them Sinh Vien')

@section('content')
<div class="col-4">
    <form action="{{route('students.store')}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone">
        </div>
        <div class="form-group">
            <label for="radio">Gender</label>
            <input type="radio" name="gender" id="radio" value="0">Nu
            <input type="radio" name="gender" id="radio" value="1">Nam
            <input type="radio" name="gender" id="radio" value="2">Khac
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="text" class="form-control" name="age" id="age">
        </div>
        <div class="form-group">
            <label for="address">address</label>
            <input type="text" class="form-control" name="address" id="address">
        </div>
        <div class="form-group">
            <label>Status</label>
            <input type="radio" name="is_active" id="is_active" value="0"> Khong kich hoat
            <input type="radio" name="is_active" id="is_active" value="1"> Kich hoat
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
       <a href="{{route('students.index')}}">Cancel

       </a>
    </form>
</div>

@endsection