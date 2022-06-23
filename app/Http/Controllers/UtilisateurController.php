<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;

class UtilisateurController extends Controller
{
    public function index()
    {
        $utilisateurs = Auth::user()->utilisateurs->slice(0, 3);

        return Inertia::render('Dashboard', [
            'utilisateurs' => $utilisateurs
        ]);
    }


    public function create()
    {
        $user = Auth::user();

        return Inertia::render('Utilisateurs/Create', [
            'user' => $user,
        ]);
    }



    public function store()
    {

        Utilisateur::create(
            Request::validate([
                'username' => ['required', 'max:50'],
                'user_id' => ['required', 'max:50'],
            ])
        );

        return Redirect::route('dashboard');
    }
}
