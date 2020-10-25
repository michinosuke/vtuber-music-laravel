<?php

namespace Database\Factories;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArtistFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Artist::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->firstName,
            'name' => $this->faker->name,
            'name_ruby' => $this->faker->name,
            'profile' => $this->faker->paragraph,
            'sex' => ['male', 'female'][random_int(0,1)],
            'birthday' => $this->faker->dateTimeThisCentury
        ];
    }
}
