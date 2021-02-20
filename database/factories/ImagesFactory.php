<?php

namespace Database\Factories;

use App\Models\images;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImagesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = images::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => $this->faker->slug,
            'imageable_id' => $this->faker->imageUrl(1280, 720),
            'imageable_type' => $this->faker->imageUrl(1280, 720),
        ];
    }
}
