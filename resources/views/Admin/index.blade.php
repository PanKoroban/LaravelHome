@extends('layout.adminMain')
@section('content')
@include('inc.messages')
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">@include('layout.adminAdd') <br></div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($news as $n)
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">

                                <a href="{{route('admin.news.edit', ['news'=>$n])}}">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">
                                        Редактировать
                                    </button>
                                </a>

                                <a href="">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"> Удалить</button>
                                </a>


                                <a href="http://localhost/news/{{$n->id}}">
                                    <p>
                                        № {{$n->id}} {{$n->title}}
                                    </p>
                                </a>
                                    <p> Категория: {{$n->cat_title}}</p>



                                <p class="card-text">{{$n->description}}</p>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{$news->links()}}

        </div>
    </div>
@endsection
