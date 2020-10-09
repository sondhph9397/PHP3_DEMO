@extends('admin-layout.master');
@section('title','Binh Luan')

@section('content-header','Binh luan')

@section('content')

<table class="table">
    <thead>
        <th>id</th>
        <th>content</th>
        <th>Student</th>
        <th>Post</th>
        <th>status</th>
        <th><a href="{{route('posts.create')}}"><button class="btn btn-success">Them</button></a></th>
    </thead>
    <tbody>
        @foreach($comment as $co)
        <tr>
            <td>{{$co->id}}</td>
            <td>{{$co->content}}</td>
            <td>{{$co->student->name}}</td>
            <td>{{$co->post->name}}</td>
            <td>
                @if ($co->status == 0)
                No
                @elseif ($co->status == 1)
                YES
                @else
                NOTHING
                @endif
            </td>
            <td>
                <a href="students/{{$co->id}}"><button class="btn btn-info">Xem</button></a>
                <a href="{{route('students.edit',$co->id)}}"><button class="btn btn-success">Sửa</button></a>
            </td>
            <td>
                <form action="{{route('students.destroy',$co->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE"></input>
                    <button class="btn btn-danger" type="submit">Xóa</button> <a href="students/{{$co->id}}"></a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection