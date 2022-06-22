@extends('layout.adminMain')
@section('content')

    <div class="album py-5 bg-light">
        <div class="container">
            @include('inc.messages')

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


                <form method="post" action="{{route('profile', ['user'=> $user])}}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Имя</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
                        <div id="nameHelp" class="form-text">Укажи имя...</div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Автор</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}">
                        <div id="emailHelp" class="form-text">Укажи email...</div>
                    </div>

{{--                    <div class="mb-3">--}}
{{--                        <label for="password" class="form-label">Автор</label>--}}
{{--                        <input type="password" class="form-control" name="password" id="password">--}}
{{--                        <div id="passwordHelp" class="form-text">Укажи пароль...</div>--}}
{{--                    </div>--}}

                    <div class="form-group">
                        <label for="is_admin">Категория</label>
                        <select class="form-control" name="is_admin" id="is_admin">
                                <option value="1">Да</option>
                                <option value="2" selected>Нет</option>
                        </select>
                        <div id="passwordHelp" class="form-text">Админ ли...</div>

                    </div>



                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
