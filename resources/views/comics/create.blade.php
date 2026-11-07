@extends('layouts.app')

@section('title', 'Add Comics')

@section('content')

    @include('comics._form', ['comic' => $comic, 'genres' => $genres])
    <form method="POST" action="{{ route('comics.store') }}">
        @csrf
        <!-- Form fields will be included from the partial -->
        <button type="submit" class="btn btn-primary">Add Comic</button>
        <a href="{{ route('comics.index') }}" class="btn btn-secondary">Cancel</a>
    </form>

@endsection