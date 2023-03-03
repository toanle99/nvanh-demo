<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRegisterPassed()
    {
        $faker = \Faker\Factory::create();
        $param = [
            'username' => $faker->unique()->name,
            'email' => $faker->unique()->email,
            'password' => 'password',
            'password_confirmation' => 'password',
        ];

        $response = $this->post('/register', $param);
        $response->assertRedirect('/')->assertStatus(302);
    }

    public function testPasswordNotMatch()
    {
        $faker = \Faker\Factory::create();
        $param = [
            'username' => $faker->unique()->name,
            'email' => $faker->unique()->email,
            'password' => 'password',
            'password_confirmation' => 'password1',
        ];

        $response = $this->post('/register', $param);
        $response->assertSessionHasErrors('password_confirmation')->assertStatus(302);
    }

    public function testRegisterRequiredFieldUserName()
    {
        $faker = \Faker\Factory::create();
        $param = [
            'username' => '',
            'email' => $faker->unique()->email,
            'password' => 'password',
            'password_confirmation' => 'password',
        ];

        $response = $this->post('/register', $param);
        $response->assertSessionHasErrors('username')->assertStatus(302);
    }

    public function testRegisterRequiredFieldEmail()
    {
        $faker = \Faker\Factory::create();
        $param = [
            'username' => $faker->unique()->name,
            'email' => '',
            'password' => 'password',
            'password_confirmation' => 'password',
        ];

        $response = $this->post('/register', $param);
        $response->assertSessionHasErrors('email')->assertStatus(302);
    }

    public function testRegisterRequiredFieldPassword()
    {
        $faker = \Faker\Factory::create();
        $param = [
            'username' => $faker->unique()->name,
            'email' => $faker->unique()->email,
            'password' => '',
            'password_confirmation' => 'password',
        ];

        $response = $this->post('/register', $param);
        $response->assertSessionHasErrors('password')->assertStatus(302);
    }

    public function test_register_show()
    {
        $response = $this->get('/register');

        $response->assertStatus(200)->assertViewIs('auth.register');
    }
}
