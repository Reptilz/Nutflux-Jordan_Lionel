<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

//Lie les utilisateurs à la vue dashboard
Route::get('/dashboard', 'App\Http\Controllers\UtilisateurController@index')->name('dashboard');

//Affiche la vue Create des Utilisateurs
Route::get('/create', 'App\Http\Controllers\UtilisateurController@create')->name('utilisateurs.create');

//Création d'un utilisateur
Route::post('/create', 'App\Http\Controllers\UtilisateurController@store')->name('utilisateurs.store');

//Route des movies
Route::get('/movies', 'App\Http\Controllers\MovieController@index')->name('movies.index');

Route::get('show/{id}', 'App\Http\Controllers\MovieController@show')->name('movies.show');