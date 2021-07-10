<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ClientFactory extends Factory
{
    use RefreshDatabase;

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker = \Faker\Factory::create('pt_BR');

        return [
            'nome' => $this->faker->name,
            'cpf' => $this->faker->cpf,
            'data_nasc' => $this->faker->date(),
            'data_cadastro' => $this->faker->date(),
            'renda' => $this->faker->numberBetween(1, 999999)
        ];
    }
}
