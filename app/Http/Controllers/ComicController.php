<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Models\Genre;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $genreId = $request->query('genre_id');

        $query = Comic::with('genre');

        if ($genreId) {
            $query = $query->where('genre_id', $genreId);
        }

        $comics = $query->get();

        return view('comics.index', compact('comics'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Comic $comic)
    {
        $genres = Genre::all();
        return view('comics.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre_id' => 'required|exists:genres,id',
            'rate' => 'required|numeric|min:1|max:5',
            'chapter' => 'required|numeric|min:1|max:2000',
            'is_completed' => 'required|in:1,0',
        ]);

        Comic::create($validated);
        return redirect()->route('comics.index')->with('success', 'Comic created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        $genres = Genre::all();
        return view('comics.edit', compact('comic', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre_id' => 'required|exists:genres,id',
            'rate' => 'required|numeric|min:1|max:5',
            'chapter' => 'required|numeric|min:1|max:2000',
            'is_completed' => 'required|in:1,0',
        ]);

        $comic->update($validated);
        return redirect()->route('comics.index')->with('success', 'Comic updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('success', 'Comic deleted successfully.');
    }

    public function filter($value)
    {
        return redirect()->route('comics.index', [
            'genre_id' => $value
        ]);
    }
}
