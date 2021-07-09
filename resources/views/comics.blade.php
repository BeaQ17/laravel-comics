<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="cards">
        @foreach ($comics as $comic)
            <img src="{{ $data->"thumb"}}" alt="thumbnail comic picture">
            <p>{{$data->"title"}}</p>
        @endforeach
    </div>

</body>
</html>