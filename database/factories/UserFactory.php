<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

    	$password = password_hash(env("USER_PASS"),PASSWORD_BCRYPT);

    	$username = env("USER_NAME");

    	$email = env("USER_EMAIL");

    	return [
    		'img' => 'user.png',    	
    		'username' => $username,      
    		'email' => $email,
    		'email_verified_at' => now(),           
    		'password' => $password,
    		'token' => $password,  
    		'remember_token' => Str::random(10),
    		'role_id' => $this->faker->numberBetween(1,2),
    		'statu_id' => $this->faker->numberBetween(0, 1),
    		'is_buyer' => $this->faker->numberBetween(0,1),   
    		'terms' => 1,
    		'is_verified' => $this->faker->numberBetween(0,1),     
    		'is_banned' => $this->faker->numberBetween(0,1),      
    	];


    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
    	return $this->state(fn (array $attributes) => [
    		'email_verified_at' => null,
    	]);
    }
}
