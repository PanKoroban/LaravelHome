@extends('layout.main')
@section('content')
    <div class="col-lg-6 col-md-8 mx-auto">
<h3 class="fw-light">№ {{$news['id']}} {{$news['name']}}</h3>
<p class="lead text-muted">{{$news['full_text']}}</p>
    </div>

@endsection
