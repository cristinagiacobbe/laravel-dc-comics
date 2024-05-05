@extends('layouts.app')


@section('content')

    <body>
        <div class="container w50 my-3 ">


            <div class="card">
                <img class="card-img-top" src="{{ $comic->thumb }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">{{ $comic->description }}</p>
                    <p class="card-text"><small class="text-muted">{{ $comic->series }}</small></p>
                </div>
            </div>


        </div>

    </body>
@endsection
