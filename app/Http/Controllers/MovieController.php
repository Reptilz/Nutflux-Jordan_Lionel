<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Actor;
use App\Models\Movie;
use App\Models\Director;
use App\Models\Categorie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with('categories', 'actors', 'directors')->get();
        $categories = Categorie::all();
        $actors = Actor::all();
        $directors = Director::all();

        return Inertia::render('Movies/Index', [
            'movies' => $movies,
            'categories' => $categories,
            'actors' => $actors,
            'directors' => $directors,
        ]);
    }

    public function show($id){
       
        $movies = Movie::find($id);
        
        return Inertia::render('Movies/Show', [
            'movies' => $movies->only('categories','actors', 'directors','id', 'title', 'overview', 'image', 'dateReview', 'rating', 'duration'),
            
        ]);

       

    }
}
