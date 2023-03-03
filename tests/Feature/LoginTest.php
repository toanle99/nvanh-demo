<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_faile()
    {
        $faker = \Faker\Factory::create();
        $user = User::create([
            'username' => $faker->unique()->name,
            'email' => $faker->unique()->email,
            'password' => 'password',
        ]);

        $param = [
            'username' => $user->email,
            'password' => 'password2',
        ];

        $this->post('/login', $param)->assertStatus(302);
    }
    public function test_login_by_username()
    {
        $faker = \Faker\Factory::create();
        $user = User::create([
            'username' => $faker->unique()->name,
            'email' => $faker->unique()->email,
            'password' => 'password',
        ]);

        $param = [
            'username' => $user->username,
            'password' => 'password2',
        ];

        $this->post('/login', $param)->assertStatus(302);
    }
    public function test_login()
    {
        $this->get('/login')->assertStatus(200)->assertViewIs('auth.login');
    }
}
