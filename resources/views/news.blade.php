@extends('layout.main')
@section('content')
    <div class="col-lg-6 col-md-8 mx-auto">
        @foreach($news as $new)
<h3 class="fw-light">№ {{$new->id}} {{$new->title}}</h3>
        <p>Категория {{$new->cat_title}}</p>
<p class="lead text-muted">{{$new->description}}</p>
    </div>
    @endforeach
@endsection
