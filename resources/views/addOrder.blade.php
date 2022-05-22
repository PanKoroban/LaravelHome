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

                <form method="post" action="{{route('orderstore')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Имя заказчика</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Укажи имя...</div>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Телефон</label>
                        <input type="phone" name="phone"  class="form-control" id="phone" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Укажи телефон...</div>
                    </div>

                    <div class="mb-3">
                        <label for="mail" class="form-label">Почта</label>
                        <input type="email" name="mail"  class="form-control" id="mail" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Укажи почту...</div>
                    </div>

                    <div class="mb-3">
                        <label for="what" class="form-label">Что требуется</label>
                        <textarea name="what"  class="form-control" id="what" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
