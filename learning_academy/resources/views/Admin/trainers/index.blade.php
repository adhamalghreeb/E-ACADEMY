@extends('Admin.layout')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h6>Trainers</h6>
        <a class="btn btn-sm btn-primary" href="{{route('admin.trainers.create')}}">Add new</a>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">img</th>
            <th scope="col">Name</th>
            <th scope="col">phone</th>
            <th scope="col">spec</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($trainers as $t)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>
                    <img src="{{asset('uploads/trainers/'.$t->img)}}" height="50px">
                </td>
                <td>{{$t->name}}</td>
                <td>
                @if($t->phone !== null)
                    {{$t->phone}}
                @else
                    not found
                @endif
                </td>
                <td>{{$t->spec}}</td>
                <td>
                    <a href="{{route('admin.trainers.edit', $t->id)}}" class="btn btn-sm btn-info">Edit</a>
                    <a href="{{route('admin.trainers.delete', $t->id)}}" class="btn btn-sm btn-danger">Delet</a>
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>

@endsection
