@extends('layouts.app')


@section('title', 'Page Not Found')

@section('content')
    <h1>Page not found</h1>
    <p>The page you are looking for could not be found.</p>

    <a href="{{ route('comics.index') }}">Back to the list</a>
@endsection
