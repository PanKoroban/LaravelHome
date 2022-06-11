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

                                <a href="javascript:;" class = "delete" rel = "{{$c->id}}">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"> Удалить </button>
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
@push('js')
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function(){
            const el = document.querySelectorAll(".delete");
            el.forEach(function(value, key){
                value.addEventListener('click', function() {
                    const id = this.getAttribute('rel');
                    if(confirm('Подтвердите удаление')){
                        send('http://localhost/admin/category/' + id).then(() => {
                            location.reload();
                        })
                    }
                })
            })
        })
        async function send(url){
            let responce = await fetch(url, {
                method: 'DELETE',
                headers: {
                    {{--"_token: {{csrf_token()}}" такой вариант возможен если делаем js в php файле - не рекомендуется--}}
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            });
            let result = await responce.json();
            return result.ok;
        }
    </script>
@endpush
