<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Actor;
use App\Models\Categorie;
use App\Models\Director;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        Actor::factory(100)->create();
        Categorie::factory(15)->create();
        Director::factory(30)->create();

        //Categorie->Movie
        $ids_cat = range(1, 15);
        Movie::factory(50)->create()->each(function ($movie) use ($ids_cat) {
            shuffle($ids_cat);
            $movie->categories()->attach(array_slice($ids_cat, 0, rand(1, 3)));
        });


        //Actor->movie
        $ids_actor = range(1, 100);
        Movie::factory()->create()->each(function ($movie) use ($ids_actor) {
            shuffle($ids_actor);
            $movie->actors()->attach(array_slice($ids_actor, 0, rand(1, 5)));
        });


        //Director->movie
        $ids_director = range(1, 30);
        Movie::factory()->create()->each(function ($movie) use ($ids_director) {
            shuffle($ids_director);
            $movie->directors()->attach(array_slice($ids_director, 0, rand(1, 2)));
        });
    }
}
