<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use App\Models\Movie;
use App\Models\Categorie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with('categories')->get();
        $categories = Categorie::all();
        $users = User::all();

        return Inertia::render('Movies/Index', [
            'movies' => $movies,
            'categories' => $categories,
            'users' => $users,
        ]);
    }
}
