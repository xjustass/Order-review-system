<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->name,
            'last_name' => $this->faker->lastName,
            'phone_number' => $this->faker->numerify('##########'),
            'email' => $this->faker->unique()->safeEmail,
            'service' => $this->faker->text(30),
            'created_by' => $this->faker->randomDigit(),
            'order_review_code' => Str::random(10),
            'findable' => false,
        ];

    }
}
