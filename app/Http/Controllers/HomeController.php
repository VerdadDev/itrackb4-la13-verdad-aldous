<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Models\Genre;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'comicCount' => Comic::count(),
            'genreCount' => Genre::count(),
        ]);
    }
}
