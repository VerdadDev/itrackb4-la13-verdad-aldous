@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div>
    <h2>Comic Record System</h2>
</div>
<p>
    A small system for adding your favorite comics and rate it.
</p>
<a href="{{route ('comics.index')}}" class="btn btn-primary">Open the comics list</a>
<div class="row g-3 mb-4">
<div class="col-sm-6">
    <div class="card text-center shadow-sm">
        <div class="card-body">
            <div class="display-6 fw-bold">{{$comicCount}}</div>
        </div>
        <div class="text-muted">
            comics on record
        </div>
    </div>
</div>
<div class="col-sm-6">
    <div class="card text-center shadow-sm">
        <div class="card-body">
            <div class="display-6 fw-bold">{{$genreCount}}</div>
        </div>
        <div class="text-muted">
            genres
        </div>
    </div>
</div>
<div class="card shadow-sm">
    <div class="card-body d-flex align-items-center gap-4">
        <img src="{{ asset('img/images.jpg') }}" width="96" height="96" class="rounded-circle">
        <div>
            <h5 class="mb1">Aldous Verdad</h5>
            <div class="text-muted small">BSIT - 4th Year - Block 4C</div>
        </div>
    </div>
</div>
</div>
@endsection