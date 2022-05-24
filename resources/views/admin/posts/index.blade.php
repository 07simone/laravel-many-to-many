


@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
            @forelse ( $posts as $post)
                <div class="col-4 mb-3">
                    <div class="card " style="width: 18rem;">
                        <img src="{{$post->img}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h1 class="card-title">{{$post->Titolo}}</h1>
                            <h5 class="card-title">{{$post->Autore}}</h5>
                            <p class="card-text">{{$post->Descrizione}}</p>
                            <a href="{{route("admin.posts.show", $post)}}" class="btn btn-primary">Dettagli</a>
                        </div>
                    </div>
                </div>
                @empty

            @endforelse
    </div>
    <div class="col-12">
        {{$posts->links()}}
    </div>
</div>


@endsection
