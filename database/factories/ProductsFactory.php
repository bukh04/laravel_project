<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Products::class;

    public function definition(): array
    {
        return [
            'Price'=>random_int(1,2000),
            'image'=>fake()->imageUrl(),
            'title'=>fake()->sentence(5),
            'description'=>fake()->text(50),
            'comments'=>fake()->text(30),
            'amount_of_buys'=>random_int(1,50),
            'availability'=>1,
            'category_id'=>Category::get()->random()->id,
        ];
    }
}
