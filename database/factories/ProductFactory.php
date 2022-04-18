<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker-> name(),
            'code' => $this->faker-> ean8(),
            'image' => '',
            'price' => $this->faker-> numberBetween($min = 10000, $max = 100000),
            'inventory' => $this->faker-> numberBetween($min = 0, $max = 100),
            'top' => $this->faker-> boolean($percentage = 10)
        ]; 
    }
}
