<?php

namespace Database\Factories;

use App\Models\Account;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $descriptor_one_options = ['PAYROLL', 'Email Trfs', 'GST', 'PERSONAL LOAN'];
        $descriptor_two_options = ['Vehikl', 'E-Transfer Sent', 'Canada', 'SPL'];
        return [
            'account_id' => Account::factory(),
            'date' => $this->faker->date,
            'descriptor_one' => $this->faker->randomElement($descriptor_one_options),
            'descriptor_two' => $this->faker->randomElement($descriptor_two_options),
            'amount' => $this->faker->randomElement(['-', '']) . $this->faker->randomFloat(2,0,1000,),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];
    }
}
