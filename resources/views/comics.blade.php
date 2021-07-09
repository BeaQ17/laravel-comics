<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics</title>
</head>
<body>

    <div class="cards">
        @foreach ($comics as $comic)
            <img src="{{ $comic["thumb"]}}" alt="thumbnail comic picture">
            <p>{{$comic["title"]}}</p>
        @endforeach
    </div>

</body>
</html>