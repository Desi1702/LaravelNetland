<?php

namespace Database\Factories;

use App\Models\Media;
use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory
{
    protected $model = Media::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'rating' => $this->faker->randomFloat(1, 1, 10),
            'length_in_minutes' => $this->faker->numberBetween(60, 180),
            'released_at' => $this->faker->date(),
            'country_of_origin' => $this->faker->country(),
            'youtube_trailer_id' => $this->faker->word,
            'summary' => $this->faker->paragraph,
            'spoken_in_language' => $this->faker->languageCode(),
            'type' => $this->faker->randomElement(['movie', 'series']),
        ];
    }
}
