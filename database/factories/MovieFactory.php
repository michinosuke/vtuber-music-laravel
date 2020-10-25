<?php

namespace Database\Factories;

use App\Models\Video;
use App\Models\Music;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Video::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->firstName,
            'music_id' => Music::factory(),
            'release_date' => $this->faker->dateTimeThisCentury,
            'is_mv' => random_int(0, 1)
        ];
    }
}
