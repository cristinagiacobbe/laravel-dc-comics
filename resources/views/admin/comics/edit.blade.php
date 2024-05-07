<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Comic form</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        <h1 class="m-5">Update comic 🦹‍♀️</h1>
        <form action="{{ route('comics.update', $comic) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="helptitle"
                    placeholder="Insert comic title" value="{{ $comic->title }}" />

            </div>

            <div class="mb-3">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $comic->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" class="form-control" name="price" id="price"
                    aria-describedby="helpPrice" placeholder="Insert comic price" value="{{ $comic->price }}" />

            </div>
            <button type="submit" class="btn btn-dark ">Update</button>
        </form>
    </div>
</body>

</html>
