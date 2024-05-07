@extends('layouts.app')


@section('content')

    <body>
        <a class="btn btn-primary rounded-pill position-fixed top-0 end-0 m-3" href="{{ route('comics.create') }}"
            role="button">
            <i class="fa fa-plus" aria-hidden="true"></i>
            <span>ADD</span>
        </a>

        <div class="table-responsive">
            <table class="table table-primary ">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Series</th>
                        <th>Link to</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->description }}</td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->series }}</td>
                            <td><a href="{{ route('comics.show', $comic) }}">link to comic</a>
                                <a href="{{ route('comics.edit', $comic) }}">Edit comic</a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- serve a stilizzare l'impaginazione --}}
        {{ $comics->links('pagination::bootstrap-5') }}

    </body>
@endsection
