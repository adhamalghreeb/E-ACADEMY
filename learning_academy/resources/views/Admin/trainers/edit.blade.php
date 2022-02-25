@extends('Admin.layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h6>Trainer / Edit / {{$trainers->name}}</h6>
    <a class="btn btn-sm btn-primary" href="{{route('admin.trainers.index')}}">Back</a>
</div>
@include('Admin.inc.erros')
<form method="POST" action="{{route('admin.trainers.update')}}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$trainers->id}}">
    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control" value="{{$trainers->name}}">
    </div>
    <div class="form-group">
        <label>phone</label>
        <input type="text" name="phone" class="form-control" value="{{$trainers->phone}}">
      </div>
      <div class="form-group">
        <label>spec</label>
        <input type="text" name="spec" class="form-control" value="{{$trainers->spec}}">
      </div>
      <img src="{{asset('uploads/trainers/'.$trainers->img)}}" height="100px" class="my-3">
      <div class="form-group">
        <input type="file" name="img" class="form-control-file">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
