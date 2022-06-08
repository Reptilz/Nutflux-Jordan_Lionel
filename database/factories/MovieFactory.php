<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{

    protected $model = Movie::class;


    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'overview' => $this->faker->text(),
            'dateReview' => $this->faker->word(),
            'image' => $this->faker->imageUrl(),
            'url_video' => 'mavideo.com/' . rand(10, 255),
            'rating' => $this->faker->randomDigitNotNull(),
            'dateReview' => $this->faker->word()
        ];
    }
}
