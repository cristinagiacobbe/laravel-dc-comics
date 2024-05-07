@extends('layouts.app')


@section('content')

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
                <button type="submit" class="btn btn-success ">Update</button>
                <button class="btn btn-danger "><a class="back" href="{{ route('comics.index') }}">Turn back</a></button>
            </form>
        </div>
    </body>
@endsection
