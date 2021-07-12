<!-- INDEX: indice di tutti gli elementi -->

@extends('layout.app')

@section('title', 'Comics page')
    
@section('content')
    <h1>Comics page</h1>

    <div class="cards">
        @foreach ($comics as $comic)
            <img src="{{ $comic["thumb"]}}" alt="thumbnail comic picture">
            <p>{{$comic["title"]}}</p>
        @endforeach
    </div>
    
@endsection

   