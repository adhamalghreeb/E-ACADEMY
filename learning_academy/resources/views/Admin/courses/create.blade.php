@extends('Admin.layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h6>Courses / Add new</h6>
    <a class="btn btn-sm btn-primary" href="{{route('admin.courses.index')}}">Back</a>
</div>
@include('Admin.inc.erros')
<form method="POST" action="{{route('admin.courses.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="number" name="price" class="form-control">
    </div>
    <div class="form-group">
        <select class="form-control" name="cat_id">
            @foreach ($cats as $c)
                <option value="{{$c->id}}">{{$c->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <select class="form-control" name="trainer_id">
            @foreach ($trainers as $t)
                <option value="{{$t->id}}">{{$t->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Small-Desc</label>
        <input type="text" name="small_desc" class="form-control">
    </div>
    <div class="form-group">
        <label>Desc</label>
        <textarea name="desc" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <input type="file" name="img" class="form-control-file">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
