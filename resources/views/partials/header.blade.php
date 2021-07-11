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
        <div class="container">
            DC POWER VISA ®
            ADDITIONAL DC SITES V
        </div>
    </div>

    <div class="white">
        <div class="container">
            <img src="../laravel-comics/images/dc-logo.png" alt="DC logo" class="logo">
            <ul>
                @foreach ($menu as $item)
                    <li>
                        <a href="{{$item['href']}}">{{$item['text']}}</a>
                    </li>
                @endforeach
            </ul>
            <div class="search"></div>
        </div>
    </div>

    <div class="jumbotron">
        <img src="../laravel-comics/images/jumbotron.jpg" alt="jumbotron image">
    </div>


    
</header>