@extends('Admin.layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h6>Trainer / Add new</h6>
    <a class="btn btn-sm btn-primary" href="{{route('admin.trainers.index')}}">Back</a>
</div>
@include('Admin.inc.erros')
<form method="POST" action="{{route('admin.trainers.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label>phone</label>
        <input type="text" name="phone" class="form-control">
      </div>
      <div class="form-group">
        <label>spec</label>
        <input type="text" name="spec" class="form-control">
      </div>
      <div class="form-group">
        <input type="file" name="img" class="form-control-file">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
