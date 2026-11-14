@extends('layouts.app')

@section('title', $comic->title)  {{-- ✅ FIX: single-line syntax, no unclosed @section --}}

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-primary text-white py-3 d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><i class="bi bi-book me-2"></i>{{ $comic->title }}</h5>
                    <span class="badge bg-light text-dark fs-6">
                        @if($comic->is_completed)
                            <i class="bi bi-check-circle-fill text-success me-1"></i>Completed
                        @else
                            <i class="bi bi-arrow-repeat text-warning me-1"></i>Ongoing
                        @endif
                    </span>
                </div>

                <div class="card-body p-4">
                    <dl class="row mb-0">
                        <dt class="col-sm-4 text-muted">Author</dt>
                        <dd class="col-sm-8">{{ $comic->author }}</dd>

                        <dt class="col-sm-4 text-muted">Genre</dt>
                        <dd class="col-sm-8">
                            <span class="badge bg-primary">{{ $comic->genre->name }}</span>
                        </dd>

                        <dt class="col-sm-4 text-muted">Rating</dt>
                        <dd class="col-sm-8">
                            @for($i = 1; $i <= 5; $i++)
                                <i class="bi bi-star{{ $i <= $comic->rate ? '-fill text-warning' : ' text-secondary' }}"></i>
                            @endfor
                            <small class="ms-1 text-muted">({{ $comic->rate }}/5)</small>
                        </dd>

                        <dt class="col-sm-4 text-muted">Chapters</dt>
                        <dd class="col-sm-8">{{ $comic->chapter }}</dd>
                    </dl>
                </div>

                <div class="card-footer bg-transparent d-flex gap-2">
                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning btn-sm">
                        <i class="bi bi-pencil me-1"></i>Edit
                    </a>
                    <a href="{{ route('comics.index') }}" class="btn btn-outline-secondary btn-sm">
                        <i class="bi bi-arrow-left me-1"></i>Back to List
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
