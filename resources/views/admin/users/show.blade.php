@extends('layouts.app');
@section('content')
    <div class="container">
        <h1>{{$user->name}}</h1>
        <p>{{$user->email}}</p>
        <a class="btn btn-primary" href="{{route("admin.users.index")}}">Indietro</a>
    </div>

@endsection
