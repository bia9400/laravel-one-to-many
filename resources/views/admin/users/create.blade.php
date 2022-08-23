@extends('layouts.app');

@section('content')
    <div class="container ">
        <form action="{{ route('admin.users.store') }}" method="post">
            @csrf
            <div class="mb-3 ">
                <label for="exampleFormControlInput1" class="form-label">Nome Utente</label>
                <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome Post"
                    value="{{ old('name') }}">
                    
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Email Utente</label>
                <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ old('email') }}</textarea>
            </div>

            <div class="mb-3 ">
                <label for="exampleFormControlInput1" class="form-label">Città Utente</label>
                <input name="city" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome Post"
                    value="{{old("city")}}">
                    
            </div>
            <div class="mb-3 ">
                <label for="exampleFormControlInput1" class="form-label">Altezza Utente</label>
                <input name="height" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome Post"
                    value="{{old("height")
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Salva Dati</button>

            </div>
        </form>
    </div>
@endsection
