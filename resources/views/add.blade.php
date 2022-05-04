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

<form>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Название статьи</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Название новости здесь...</div>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Текст новости</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Со всем согласен</label>
    </div>
    <button type="submit" class="btn btn-primary">Отправить</button>
</form>
        </div>
    </div>
</div>
@endsection
