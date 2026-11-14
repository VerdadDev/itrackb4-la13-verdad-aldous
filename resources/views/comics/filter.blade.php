@extends('layouts.app')

@section('title', 'Filter by Genre')  {{-- ✅ FIX: single-line, no unclosed @section --}}

@section('content')

    <h5 class="mb-3 text-muted">
        Showing: <strong>{{ $genre ?? 'All Genres' }}</strong>
    </h5>

    <div class="card">
        <div class="card-body p-0">
            <table class="table table-hover align-middle mb-0">
                <thead>
                    <tr>
                        <th style="width:50px">#</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th class="text-center">Rating</th>
                        <th>Genre</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr>
                            <td class="text-muted">{{ $loop->iteration }}</td>
                            <td class="fw-semibold">{{ $comic->title }}</td>
                            <td>{{ $comic->author }}</td>
                            <td class="text-center">{{ $comic->rate }}/5</td>
                            <td>
                                <span class="badge rounded-pill bg-primary-subtle text-primary">
                                    {{ $comic->genre->name }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-5">
                                <i class="bi bi-inbox fs-3 d-block mb-2"></i>
                                No comics found for this genre.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('comics.index') }}" class="btn btn-outline-secondary btn-sm">
            <i class="bi bi-arrow-left me-1"></i>Back to All Comics
        </a>
    </div>

@endsection
