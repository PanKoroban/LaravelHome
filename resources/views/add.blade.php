@extends('layout.main')
@section('content')

{{--<form action="addController.php" method="post">--}}
{{--    <input type="text" name="name">--}}
{{--    <textarea name = 'full_text'>--}}
{{--    </textarea>--}}
{{--    <input type="submit">--}}
{{--</form>--}}
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

<form method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Имя пользователя</label>
        <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Укажи имя...</div>
    </div>
    <div class="mb-3">
        <label for="comment" class="form-label">Текст комментария</label>
        <textarea class="form-control" id="comment" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Отправить</button>
</form>
        </div>
    </div>
</div>
@endsection
