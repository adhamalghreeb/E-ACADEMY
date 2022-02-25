@extends('Admin.layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h6>Trainer / Edit / {{$courses->name}}</h6>
    <a class="btn btn-sm btn-primary" href="{{route('admin.courses.index')}}">Back</a>
</div>
@include('Admin.inc.erros')
<form method="POST" action="{{route('admin.courses.update')}}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$courses->id}}">
    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control" value="{{$courses->name}}">
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="number" name="price" class="form-control" value="{{$courses->price}}">
    </div>
    <div class="form-group">
        <select class="form-control" name="cat_id">
            @foreach ($cats as $c)
                <option value="{{$c->id}}" @if($courses->cat_id == $c->id) selected @endif>{{$c->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <select class="form-control" name="trainer_id">
            @foreach ($trainers as $t)
                <option value="{{$t->id}}" @if($courses->trainer_id == $t->id) selected @endif>{{$t->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Small-Desc</label>
        <input type="text" name="small_desc" class="form-control" value="{{$courses->small_desc}}">
    </div>
    <div class="form-group">
        <label>Desc</label>
        <textarea name="desc" cols="30" rows="10" class="form-control">{{$courses->desc}}</textarea>
    </div>
    <div class="form-group">
        <input type="file" name="img" class="form-control-file">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
