@extends('layouts.app')


@section('content')

    <body>
        <div class="container">
            <h1 class="m-5">Create a new comic 🦹‍♀️</h1>
            <form action="{{ route('comics.store') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId"
                        placeholder="Insert comic title" />

                </div>

                <div class="mb-3">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" step="0.01" class="form-control" name="price" id="price"
                        aria-describedby="helpId" placeholder="Insert comic price" />

                </div>
                <button type="submit" class="btn btn-dark ">Create</button>
            </form>
        </div>
    </body>
@endsection
