@extends('layouts.app')


@section('content')

    <body>
        <div class="container">
            <div class="row">

                <div class="col">
                    <p>{{ $comic->title }}</p>
                    <p>{{ $comic->description }}</p>
                    <p>{{ $comic->price }}</p>
                    <p>{{ $comic->series }}</p>
                    <a href="{{ route('comics.index') }}">turn back</a>
                </div>

            </div>
        </div>
    </body>
@endsection
