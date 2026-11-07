@extends('layouts.app')


@section('title', 'Internal Server Error')

@section('content')
    <h1>Internal Server Error</h1>
    <p>An error occurred while processing your request.</p>

    <a href="{{ route('comics.index') }}">Back to the list</a>
@endsection
