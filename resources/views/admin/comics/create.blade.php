@extends('layouts.app')


@section('content')

    <body>
        <div class="container">
            <h1 class="m-5">Create a new comic 🦹‍♀️</h1>

            @include('partials.validation-errors')

            <form action="{{ route('comics.store') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                        id="title" aria-describedby="helpId" placeholder="Insert comic title"
                        value="{{ old('title') }}" />
                    @error('title')
                        <div class="alert alert-danger ">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                        rows="3">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror"
                        name="price" id="price" aria-describedby="helpId" placeholder="Insert comic price"
                        value="{{ old('price') }}" />
                    @error('price')
                        <div class="alert alert-danger "></div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-dark ">Create</button>
            </form>
        </div>
    </body>
@endsection
