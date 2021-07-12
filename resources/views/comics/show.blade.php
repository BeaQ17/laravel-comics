<!-- SHOW = mostra elemento singolo -->
<h1>Fumetto singolo</h1>

@extends('layout.app')

@section('title', 'Comic-one page')
    
@section('content')
    <h1>Comic-one page</h1>

    <div class="card_one">
        
        <img src="{{ $comic["thumb"]}}" alt="thumbnail comic picture">
        <p>{{$comic["title"]}}</p>
        
    </div>
    
@endsection