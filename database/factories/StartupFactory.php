<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Startup>
 */
class StartupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::inRandomOrder()->first();

        return [
            'user_id' => $user->id,
            'name' => fake()->company(),
            'category_id' => fake()->jobTitle(),
            'description' => fake()->text(100),
            'url' => 'https://url.com',
            'financial_need' => fake()->numberBetween(10000000, 20000000),
            'logo' => 'storage/images/logos/default.png',
            'country' => 'España'
        ];
    }
}
