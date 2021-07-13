<?php

$menu = [
    [
        "href" => route("characters"),
        "text" => "CHARACTERS",
    ],
    [
        "href" => route("comics"),
        "text" => "COMICS",
    ],
    [
        "href" => route("movies"),
        "text" => "MOVIES",
    ],
    [
        "href" => route("tv"),
        "text" => "TV",
    ],
    [
        "href" => route("games"),
        "text" => "GAMES",
    ],
    [
        "href" => route("collectibles"),
        "text" => "COLLECTIBLES",
    ],
    [
        "href" => route("videos"),
        "text" => "VIDEOS",
    ],
    [
        "href" => route("fans"),
        "text" => "FANS",
    ],
    [
        "href" => route("news"),
        "text" => "NEWS",
    ],
    [
        "href" => route("shop"),
        "text" => "SHOP",
    ]
]

?>

<header id="site_header">
    
    <div class="blue_stripe">
        <div class="container flex_end">
            <p>DC POWER VISA ®</p>
            <p>ADDITIONAL DC SITES <i class="fas fa-caret-down"></i></p>
        </div>
    </div>

    <div class="container white">
        <img src="{{asset("img/dc-logo.png")}}" alt="DC logo" class="logo">
        <ul>
            @foreach ($menu as $item)
                <li>
                    <a href="{{$item['href']}}">{{$item['text']}}</a>
                </li>
            @endforeach
        </ul>
        <div class="search"></div>
    </div>

    <div class="jumbotron">
        <img src="{{asset("img/jumbotron.jpg")}}" alt="jumbotron image">
    </div>


    
</header>