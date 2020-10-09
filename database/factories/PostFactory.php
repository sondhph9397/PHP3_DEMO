<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => $this->faker->numberBetween(1,10),
            'desc' => $this->faker->realText(100, 2),
            'content' => $this->faker->realText(200, 2),
            'image_url' => $this->faker->imageUrl($width = 640, $height = 480),
            'status' => $this->faker->numberBetween(0,1),
        ];
    }
}
