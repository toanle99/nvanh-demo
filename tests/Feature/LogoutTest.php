<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class LogoutTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function Login()
    {
        $faker = \Faker\Factory::create();
        $user = User::create([
            'username' => $faker->unique()->name,
            'email' => $faker->unique()->email,
            'password' => 'password',
        ]);

        $param = [
            'username' => $user->email,
            'password' => 'password',
        ];

        $this->post('/login', $param);
        return $user;
    }

    public function test_logout()
    {
        $this->Login();
        $response = $this->get('/logout')->assertRedirect('login');
    }
}
