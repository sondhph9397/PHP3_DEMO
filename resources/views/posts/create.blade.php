@extends('admin-layout.master');
@section('title','Tao Bai Viet')

@section('content-header','Bai Viet')

@section('content')
<form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
    <div>
        <input type="text" name="desc">
    </div>
    <div>
        <input type="text" name="content">
    </div>
    <div>
        <input type="file" name="image">
    </div>
    <div>
        <select name="student_id" id="">
            @foreach($students as $item)
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