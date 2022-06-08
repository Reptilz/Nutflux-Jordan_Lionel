<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with('categories')->get();

        return Inertia::render('Movies/Index', [
            'movies' => $movies
        ]);
    }
}
