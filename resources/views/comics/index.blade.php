
@extends('layouts.app')

@section('title', 'Comics')

@section('content')

    <button class="btn btn-primary mt-3">
        <a href="{{ route('comics.create') }}" class="text-white">
            Add Comics
        </a>
    </button>

    <table class="table table-striped mt-4" border="1" cellpadding="8">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Genre</th>
            <th>Actions</th>
        </tr>

        @forelse ($comics as $comic)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <a href="{{ route('comics.show', [$comic->id]) }}">
                        {{ $comic->title }}
                    </a>
                </td>
                <td>{{ $comic->genre->name }}</td>

                <td>
                    <a href="{{ route('comics.edit', [$comic->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('comics.destroy', [$comic->id]) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure you want to delete this comic?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="8">No comics found.</td>
            </tr>
        @endforelse

    </table>

@endsection
