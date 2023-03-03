<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LikeTest extends TestCase
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
    public function test_like_post()
    {
        $this->Login();

        $newPost = Post::create([
            'title' => 'test',
            'content' => 'test',
            'user_id' => auth()->user()->id,
        ]);

        $param = [
            'post_id' => $newPost->id,
            'user_id' => auth()->user()->id,
        ];

        $response = $this->post(route('like.create'), $param);
        $response->assertStatus(200);
    }
}
