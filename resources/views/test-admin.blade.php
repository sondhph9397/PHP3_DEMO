@extends('admin-layout.master')

@section('title','Quan Tri')

@section('content-header','Danh Sach Sinh Vien')

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
      <td>
        <button class="btn btn-info">Xem</button>
        <a href="{{route('students.edit',$li->id)}}"><button class="btn btn-success">Sửa</button></a>
      </td>
      <td>
        <form action="{{route('students.destroy',$li->id)}}" method="post">
          @csrf
          <input type="hidden" name="_method" value="DELETE"></input>
          <button class="btn btn-danger" type="submit">Xóa</button> <a href="students/{{$li->id}}"></a>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection