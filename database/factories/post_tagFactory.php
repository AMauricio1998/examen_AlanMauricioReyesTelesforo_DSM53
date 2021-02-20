<?php

namespace Database\Factories;

use App\Models\post_tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class post_tagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = post_tag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_post' => rand(1, 100),
            'id_tag' => rand(1, 100),
            'posts_id' => rand(1, 100),
            'tags_id' => rand(1, 100),
        ];
    }
}
