<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Comics page</title>
</head>

<body>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col">
                <p>{{$comic->title}}</p>
                <p>{{$comic->description}}</p>
                <p>{{$comic->price}}</p>
                <p>{{$comic->series}}</p>
                <a href="{{route('comics.show', $comic)}}">link to comic</a>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>