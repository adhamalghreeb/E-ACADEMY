@extends('Admin.layout')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h6>Categories</h6>
        <a class="btn btn-sm btn-primary" href="{{route('admin.cat.create')}}">Add new</a>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($cats as $cat)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$cat->name}}</td>
                <td>
                    <a href="{{route('admin.cat.edit', $cat->id)}}" class="btn btn-sm btn-info">Edit</a>
                    <a href="{{route('admin.cat.delete', $cat->id)}}" class="btn btn-sm btn-danger">Delet</a>
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>

@endsection
