@extends('admin-layout.master');
@section('title','Danh Muc')

@section('content-header','Danh Muc')

@section('content')

<table class="table">
  <thead>
    <th>id</th>
    <th>Total POST</th>
    <th>parent post</th>
    <th>name</th>
    <th>status</th>
    <th><a href="{{route('categorys.create')}}"><button class="btn btn-success">Them</button></a></th>
  </thead>
  <tbody>
    @foreach($category as $ca)
    <tr>
      <td>{{$ca->id}}</td>
      <td>{{count($ca->posts)}}</td>
      <td>{{$ca->category->name}}</td>
      <td>{{$ca->name}}</td>
      <td>
        @if ($ca->status == 0)
        No
        @elseif ($ca->status == 1)
        YES
        @else
        NOTHING
        @endif
      </td>
      <td>
        <a href="students/{{$ca->id}}"><button class="btn btn-info">Xem</button></a>
        <a href="{{route('students.edit',$ca->id)}}"><button class="btn btn-success">Sửa</button></a>
      </td>
      <td>
        <form action="{{route('students.destroy',$ca->id)}}" method="post">
          @csrf
          <input type="hidden" name="_method" value="DELETE"></input>
          <button class="btn btn-danger" type="submit">Xóa</button> <a href="students/{{$ca->id}}"></a>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection