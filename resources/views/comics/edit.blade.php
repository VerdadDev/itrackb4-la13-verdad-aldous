@extends('layouts.app')

@section('title', 'Edit Comic')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card">
                <div class="card-header bg-warning text-dark py-3">
                    <h5 class="mb-0"><i class="bi bi-pencil-square me-2"></i>Edit Comic: {{ $comic->title }}</h5>
                </div>
                <div class="card-body p-4">

                    {{-- PUT is spoofed via @method('PUT') --}}
                    <form method="POST" action="{{ route('comics.update', $comic->id) }}">
                        @csrf
                        @method('PUT')

                        @include('comics._form')

                        <div class="d-flex gap-2 mt-4">
                            <button type="submit" class="btn btn-warning px-4">
                                <i class="bi bi-save me-1"></i>Update Comic
                            </button>
                            <a href="{{ route('comics.index') }}" class="btn btn-outline-secondary">
                                <i class="bi bi-x-circle me-1"></i>Cancel
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
