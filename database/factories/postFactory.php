<?php

namespace Database\Factories;

use App\Models\post;
use Illuminate\Database\Eloquent\Factories\Factory;

class postFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'slug' => $this->faker->slug,
            'descripcion' => $this->faker->text(800),
            'imagen' => $this->faker->imageUrl(1280, 720),
            //Llaves foraneas
            'id_tag' => rand(1, 100),
            'id_user' => rand(1, 100),
            'id_categori' =>rand(1, 100),
            //----------fin llaves-------
            'extract' => $this->faker->sentence,
        ];
    }
}
