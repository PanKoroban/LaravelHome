@extends('layout.adminMain')
@section('content')

    <div class="album py-5 bg-light">
        <div class="container">
            @include('inc.messages')

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


                <form method="post" action="{{route('admin.news.update', ['news'=> $news])}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="categories_id">Категория</label>
                        <select class="form-control" name="categories_id" id="category_id">
                            @foreach($category as $cat)
                                <option value="{{$cat->id}}"
                                        @if($cat->id === old('category_id')) selected @endif
                                >{{ $cat->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Название новости</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{$news->title}}">
                        <div id="emailHelp" class="form-text">Укажи название новости...</div>
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Автор</label>
                        <input type="text" class="form-control" name="author" id="title" value="{{$news->author}}">
                    </div>


                    <div class="mb-3">
                        <label for="description" class="form-label">Описание новости</label>
                        <textarea class="form-control" id="description" rows="3" name="description">{{$news->description}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="img">Изображение</label>
                        @if($news->img)
                            <img src="{{ Storage::url($news->img) }}" style="width: 350px;">
                        @endif
                        <input type="file" id="img" name="img" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="status">Статус</label>
                        <select class="form-control" name="status" id="status">
                            <option @if(old('status') === 'DRAFT') selected @endif>DRAFT</option>
                            <option @if(old('status') === 'ACTIVE') selected @endif>ACTIVE</option>
                            <option @if(old('status') === 'BLOCKED') selected @endif>BLOCKED</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endpush
