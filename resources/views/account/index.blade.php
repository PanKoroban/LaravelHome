@extends('layout.account')
@section('content')
<div class="offset-sm-4">
    <h2>Добро пожаловать {{Auth::user()->name}}</h2>
@if(Auth::user()->is_admin)
    <a href="{{route('admin.news.index')}}">В админку</a>
    @endif
</div>
@endsection
