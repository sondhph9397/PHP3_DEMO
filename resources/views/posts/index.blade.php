@extends('admin-layout.master');
@section('title','Bai Viet')

@section('content-header','Bai Viet')

@section('content')

<table class="table">
    <thead>
        <th>id</th>
        <th>desc</th>
        <th>content</th>
        <th>img</th>
        <th>student</th>
        <th>status</th>
        <th><a href="{{route('posts.create')}}"><button class="btn btn-success">Them</button></a></th>
    </thead>
    <tbody>
        @foreach($post as $po)
        <tr>
            <td>{{$po->id}}</td>
            <td>{{$po->desc}}</td>
            <td>{{$po->content}}</td>
            <td><img src="{{ substr($po->image_url, 0, 4) == 'http' ? $po->image_url : asset("images/$po->image_url")}}" width="100" alt=""></td>
            <td>{{$po->student->name}}</td>
            <td>
                @if ($po->status == 0)
                No
                @elseif ($po->status == 1)
                YES
                @else
                NOTHING
                @endif
            </td>
            <td>
                <a href="posts/{{$po->id}}"><button class="btn btn-info">Xem</button></a>
                <a href="{{route('posts.edit',$po->id)}}"><button class="btn btn-success">Sửa</button></a>
            </td>
            <td>
                <form action="{{route('posts.destroy',$po->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE"></input>
                    <button class="btn btn-danger" type="submit">Xóa</button> <a href="posts/{{$po->id}}"></a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection