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

                                <!-- Modal trigger button -->
                                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                                    data-bs-target="#modalId-{{ $comic->id }}">
                                    Delete
                                </button>

                                <!-- Modal Body -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="modalId-{{ $comic->id }}" tabindex="-1"
                                    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                    aria-labelledby="modalTitleId-{{ $comic->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitleId-{{ $comic->id }}">
                                                    Delete current post
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">Are you want to delete this record?</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <form action="{{ route('comics.destroy', $comic) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="btn btn-danger " type="submit">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
