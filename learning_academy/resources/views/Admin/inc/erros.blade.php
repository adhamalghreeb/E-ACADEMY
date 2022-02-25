@if($errors->any())
<ul class="list-unstyled alert alert-danger">
    @foreach ($errors->all() as $e)
        <li>{{$e}}</li>
    @endforeach
</ul>
@endif
