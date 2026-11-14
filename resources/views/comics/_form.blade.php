{{--
    Shared form partial — included by both create.blade.php and edit.blade.php.
    Required variables in scope:
        $comic   → Comic model instance (new or existing)
        $genres  → Collection<Genre>
--}}

<div class="mb-3">
    <label class="form-label fw-semibold" for="title">Title</label>
    <input type="text"
           class="form-control @error('title') is-invalid @enderror"
           id="title" name="title"
           value="{{ old('title', $comic->title) }}"
           placeholder="e.g. One Piece"
           required>
    @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label fw-semibold" for="author">Author</label>
    <input type="text"
           class="form-control @error('author') is-invalid @enderror"
           id="author" name="author"
           value="{{ old('author', $comic->author) }}"
           placeholder="e.g. Eiichiro Oda"
           required>
    @error('author')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label fw-semibold" for="genre_id">Genre</label>
    <select class="form-select @error('genre_id') is-invalid @enderror"
            id="genre_id" name="genre_id" required>
        <option value="">— Select Genre —</option>
        @foreach ($genres as $genre)
            <option value="{{ $genre->id }}"
                @selected(old('genre_id', $comic->genre_id) == $genre->id)>
                {{ $genre->name }}
            </option>
        @endforeach
    </select>
    @error('genre_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="row g-3 mb-3">
    <div class="col-md-4">
        <label class="form-label fw-semibold" for="rate">Rating</label>
        <select class="form-select @error('rate') is-invalid @enderror"
                id="rate" name="rate" required>
            <option value="">— Select Rating —</option>
            @for ($i = 1; $i <= 5; $i++)
                <option value="{{ $i }}" @selected(old('rate', $comic->rate) == $i)>
                    {{ $i }} / 5
                </option>
            @endfor
        </select>
        @error('rate')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-4">
        <label class="form-label fw-semibold" for="chapter">Chapter Count</label>
        <input type="number"
               class="form-control @error('chapter') is-invalid @enderror"
               id="chapter" name="chapter" min="1" max="2000"
               value="{{ old('chapter', $comic->chapter) }}"
               placeholder="e.g. 1050"
               required>
        @error('chapter')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-4">
        <label class="form-label fw-semibold" for="is_completed">Status</label>
        <select class="form-select @error('is_completed') is-invalid @enderror"
                id="is_completed" name="is_completed" required>
            <option value="">— Select Status —</option>
            <option value="1" @selected(old('is_completed', $comic->is_completed ? '1' : '0') == '1')>
                Completed
            </option>
            <option value="0" @selected(old('is_completed', $comic->is_completed ? '1' : '0') == '0')>
                Ongoing
            </option>
        </select>
        @error('is_completed')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
