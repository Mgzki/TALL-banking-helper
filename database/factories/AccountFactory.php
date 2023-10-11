<?php

namespace Database\Factories;

use App\Models\Bank;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $account_types = ['Chequing', 'VISA'];
        return [
            'account_number' => $this->faker->unique()->numberBetween(),
            'account_type' => $this->faker->randomElement($account_types),
            'bank_id' => Bank::factory(),
            'user_id' => User::factory(),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];
    }
}
