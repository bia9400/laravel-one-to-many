@extends('layouts.app');

@section('content')
    <div class="container ">
        <div class="text-center mb-5">
            <a class="btn btn-primary" href="{{route("admin.posts.create")}}">Aggiungi post</a>
        </div>
        <div class="row row-cols-3">
            @foreach ($posts as $post)
                <div class="col">
                    <div class="card">
                        <div class="card-title">
                            <h2>
                                {{$post->name}}
                            </h2>
                        </div>
                        <div class="card-body">
                            <p>
                                {{$post->content}}

                            </p>
                        </div>
                        <a class="btn btn-primary" href="{{route("admin.posts.show",$post->id)}}">Dettagli</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection