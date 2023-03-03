<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Post;

class CommentTest extends TestCase
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

    public function testAddCommentRequiredFieldComment()
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
            'comment_text' => '',
        ];

        $this->post('/create-comment', $param)
            ->assertSessionHasErrors('comment_text')
            ->assertStatus(302);
    }

    public function testAddNewCommentPassed()
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
            'comment_text' => 'test',
        ];

        $this->post('/create-comment', $param)->assertStatus(200);
    }
}
