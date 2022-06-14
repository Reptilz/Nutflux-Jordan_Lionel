<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Actor;
use App\Models\Movie;
use App\Models\Categorie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with('categories', 'actors')->get();
        $categories = Categorie::all();
        $actors = Actor::all();

        return Inertia::render('Movies/Index', [
            'movies' => $movies,
            'categories' => $categories,
            'actors' => $actors,
        ]);
    }
}
