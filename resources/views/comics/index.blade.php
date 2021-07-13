<!-- INDEX: indice di tutti gli elementi -->

@extends('layout.app')

@section('title', 'Comics page')
    
@section('content')
    
    <div class="cards">
        @foreach ($comics as $index => $comic)
            <a href="{{route("comic", ["id" => $index])}}">
                <img src="{{ $comic["thumb"]}}" alt="thumbnail comic picture">
                <p>{{$comic["title"]}}</p>
            </a>
        @endforeach
    </div>
    
@endsection

   