@extends('layout.adminMain')
@section('content')

    <div class="album py-5 bg-light">
        <div class="container">
            @include('inc.messages')

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <p>Редактирование категории:</p>
                <form method="post" action="{{route('admin.category.update', ['category' => $category])}}">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="title" class="form-label">Название категории</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{$category->title}}">
                        <div id="emailHelp" class="form-text">Укажи название категории...</div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Описание категории</label>
                        <textarea class="form-control" id="comment" rows="3" name="description">{{$category->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
