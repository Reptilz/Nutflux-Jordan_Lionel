<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        return Inertia::render('Movies/Index', [
            'categories' => $categories
        ]);
    }
}
