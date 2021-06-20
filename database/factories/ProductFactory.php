<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'price' => $this->faker->randomNumber(),
            'header' => $this->faker->sentence(),
            'description' => $this->faker->realText(60),
            'url' => 'http://127.0.0.1:8000/storage/images/sandal.jpg',
        ];
    }
}
