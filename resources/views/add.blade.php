<?php
use \App\Http\Controllers\createController;
?>
@extends('layout.main')
@section('content')

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

<form method="post" action="{{route('store')}}">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Имя пользователя</label>
        <input type="text" class="form-control" name="name" id="name">
        <div id="emailHelp" class="form-text">Укажи имя...</div>
    </div>
    <div class="mb-3">
        <label for="comment" class="form-label">Текст комментария</label>
        <textarea class="form-control" id="comment" rows="3" name="comment"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Отправить</button>
</form>
        </div>
    </div>
</div>
@endsection
