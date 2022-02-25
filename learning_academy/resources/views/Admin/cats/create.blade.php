@extends('Admin.layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h6>Categories / Add new</h6>
    <a class="btn btn-sm btn-primary" href="{{route('admin.cat.index')}}">Back</a>
</div>
@include('Admin.inc.erros')
<form method="POST" action="{{route('admin.cat.store')}}">
    @csrf
    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
