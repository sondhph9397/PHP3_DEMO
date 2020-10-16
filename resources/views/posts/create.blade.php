@extends('admin-layout.master');
@section('title','Tao Bai Viet')

@section('content-header','Bai Viet')

@section('content')
@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif
<form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <input type="text" name="desc" placeholder="desc">
       
    </div>
    <div>
        <input type="text" name="content" placeholder="content"> 
    </div>
    <div>
        <input type="file" name="image">
    </div>
    <div>
        <select name="student_id" id="">
            @foreach($student as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
    <div>
        Publish
        <input type="radio" name="status" value="1">
    </div>
    <div>
        UnPublist
        <input type="radio" name="status" id="0">
    </div>
    <div><button type="submit">Submit</button></div>
</form>
@endsection