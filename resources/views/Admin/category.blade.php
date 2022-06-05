@extends('layout.adminMain')
@section('content')
    @include('inc.messages')

    <div class="album py-5 bg-light">
        <div class="container">
           <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">@include('layout.adminAdd') <br></div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($category as $c)
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">

                                <a href="{{ route('admin.category.edit', ['category' => $c]) }}">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">
                                        Редактировать
                                    </button>
                                </a>

                                <a href="{{asset('/category/')}}/{{$c->title}}">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"> Удалить {{$c->title}}</button>
                                </a>




                                <a href="http://localhost/category/{{$c->id}}">
                                    <p>
                                        № {{$c->id}} {{$c->title}}
                                    </p>
                                </a>
                                <p> Описание: {{$c->description}}</p>


                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{$category->links()}}
        </div>
    </div>
@endsection
