<?php

namespace Database\Factories;

use App\Models\categori;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = categori::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'descripcion' => $this->faker->text(800),
            'imagen' => $this->faker->imageUrl(1280, 720),
            //Llaves foraneas
            'post_id' => rand(1, 100),
        ];
    }
}
