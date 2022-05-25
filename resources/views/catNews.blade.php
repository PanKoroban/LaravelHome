@extends('layout.main')
@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($cat as $c)
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                            <div class="card-body">
                                <a href="http://localhost/news/{{$c->id}}">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">
                                        № {{$c->id}} {{$c->news_title}}}
                                    </button>
                                </a>

                                    <button type="button" class="btn btn-secondary"> Категория: {{$c->cat_title}}</button>

                                <p class="card-text"> {{$c->description}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

