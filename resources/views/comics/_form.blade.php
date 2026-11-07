<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Add Comics')</title>
</head>
<body class="container text-bg-white">
    
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">
                @yield('title', 'Add Comics')
            </h3>
        </div>
    </div>

    <form method="POST" action="">
        <div class="mb-3">
            <label class="form-label" for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $comic->title) }}" required>
            @error('title')
                <div class="invalid-feedback d-block">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="author">Author</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ old('author', $comic->author) }}" required>
            @error('author')
                <div class="invalid-feedback d-block">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="genre_id">Genre</label>
            <select class="form-control" id="genre_id" name="genre_id" required>
        <option value="">Select Genre</option>

        @foreach ($genres as $genre)
        <option value="{{ $genre->id }}">
            @selected(old('genre_id', $comic->genre_id) == $genre->id)
            {{ $genre->name }}  
        </option>
        @endforeach

       </select>

       @error('genre_id')
       <div class="invalid-feedback d-block">
        {{ $message }}
       </div>
       @enderror
        </div>
         </div>
        <div class="mb-3">
            <label class="form-label" for="rate">Rate</label>
            <select class="form-control" id="rate" name="rate" required>
                <option value="">Input your rating</option>
                <option value="1" @selected(old('rate') == '1')>1</option>
                <option value="2" @selected(old('rate') == '2')>2</option>
                <option value="3" @selected(old('rate') == '3')>3</option>
                <option value="4" @selected(old('rate') == '4')>4</option>
                <option value="5" @selected(old('rate') == '5')>5</option>
            </select>
            @error('rate')
                <div class="invalid-feedback d-block">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="chapter">Chapter</label>
            <input type="number" class="form-control" id="chapter" name="chapter" required value="{{ old('chapter') }}">
            @error('chapter')
                <div class="invalid-feedback d-block">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="is_completed">Complete</label>
            <select name="is_completed" class="form-control" id="is_completed" required>
                <option value="">Select Status</option>
                <option value="1" @selected(old('is_completed') == '1')>Yes</option>
                <option value="0" @selected(old('is_completed') == '0')>No</option>
            </select>
            @error('is_completed')
                <div class="invalid-feedback d-block">
                    {{$message}}
                </div>
            @enderror
        </div>
    </form>
    @yield('content')

</body>
</html>
