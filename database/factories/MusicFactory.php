<?php

namespace Database\Factories;

use App\Models\Music;
use Illuminate\Database\Eloquent\Factories\Factory;

class MusicFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Music::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->firstName,
            'name' => $this->faker->word,
            'name_ruby' => $this->faker->word,
            'lyrics' => $this->faker->paragraph,
            'lyrics_url' => $this->faker->word,
            'genre' => $this->faker->word,
            'original_video_youtube_id' => $this->faker->word,
        ];
    }
}
