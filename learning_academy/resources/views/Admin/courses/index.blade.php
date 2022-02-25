@extends('Admin.layout')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h6>Courses</h6>
        <a class="btn btn-sm btn-primary" href="{{route('admin.courses.create')}}">Add new</a>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">img</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($courses as $c)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>
                    <img src="{{asset('uploads/courses/'.$c->img)}}" height="50px">
                </td>
                <td>{{$c->name}}</td>
                <td>{{$c->price}}</td>
                <td>
                    <a href="{{route('admin.courses.edit', $c->id)}}" class="btn btn-sm btn-info">Edit</a>
                    <a href="{{route('admin.courses.delete', $c->id)}}" class="btn btn-sm btn-danger">Delet</a>
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>

@endsection
