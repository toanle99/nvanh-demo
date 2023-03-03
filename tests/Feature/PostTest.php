<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Tests\TestCase;

class PostTest extends TestCase
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

    public function testShowList()
    {
        $this->Login();
        $response = $this->get('/posts');

        $response->assertStatus(200)
            ->assertViewIs('post.list')
            ->assertViewHas('user');
    }

    public function testShowFormCreate()
    {
        $this->Login();
        $response = $this->get('/posts/create');

        $response->assertStatus(200);
    }

    public function testCreatePost()
    {
        $this->Login();

        $faker = \Faker\Factory::create();
        $param = [
            'title' => $faker->text(20),
            'content' => $faker->text(20),
        ];

        $response = $this->post('/posts', $param);
        $response->assertRedirect('/posts');
    }

    public function testPostRequiredFieldTitle()
    {
        $this->Login();

        $param = [
            'title' => '',
            'content' => 'test',
        ];

        $response = $this->post('/posts', $param);
        $response->assertSessionHasErrors('title')
            ->assertStatus(302);
    }

    public function testPostRequiredFieldContent()
    {
        $this->Login();

        $param = [
            'title' => 'test',
            'content' => '',
        ];

        $response = $this->post('/posts', $param);
        $response->assertSessionHasErrors('content')
            ->assertStatus(302);
    }

    public function testLimitedCreatePost()
    {
        $faker = \Faker\Factory::create();
        $param = [
            'username' => $faker->unique()->name,
            'email' => $faker->unique()->email,
            'password' => 'password',
        ];
        $user = User::create($param);
        $this->post('/login', ['username' => $user->email, 'password' => 'password']);


        $limit = \App\Models\Post::LIMIT;
        $newPost = [
            'title' => $faker->text(20),
            'content' => $faker->text(20),
            'user_id' => $user->id,
        ];
        for ($i = 0; $i < $limit; $i++) {
            DB::table('posts')->insert([$newPost]);
        }
        $this->post('posts', ['title' => 'test', 'content' => 'test'])
            ->assertStatus(302)
            ->assertRedirect('/posts/create');
    }

    public function testChangeStatusHiddenPost()
    {
        $this->Login();
        $faker = \Faker\Factory::create();
        $params = [
            'title' => $faker->text(20),
            'content' => $faker->text(20),
            'user_id' => auth()->user()->id,
        ];

        $newPost = Post::create($params);
        $this->get(route('posts.edit', $newPost->id))->assertRedirect('/posts');
    }

    public function testChangeStatusShowPost()
    {
        $this->Login();
        $faker = \Faker\Factory::create();
        $params = [
            'title' => $faker->text(20),
            'content' => $faker->text(20),
            'user_id' => auth()->user()->id,
            'status' => Post::POST_UNACTIVE,
        ];

        $newPost = Post::create($params);
        $this->get(route('posts.edit', $newPost->id))->assertRedirect('/posts');
    }

    public function testShowFormEdit()
    {
        $this->Login();
        $faker = \Faker\Factory::create();
        $params = [
            'title' => $faker->text(20),
            'content' => $faker->text(20),
            'user_id' => auth()->user()->id,
        ];

        $newPost = Post::create($params);
        $response = $this->get(route('posts.show', $newPost->id))->assertStatus(200);
        $response->assertViewIs('post.edit')
            ->assertViewHas('post');
    }

    public function testDeletePostPassed()
    {
        $this->Login();
        $faker = \Faker\Factory::create();
        $params = [
            'title' => $faker->text(20),
            'content' => $faker->text(20),
            'user_id' => auth()->user()->id,
        ];

        $newPost = Post::create($params);
        $response = $this->delete(route('posts.destroy', $newPost->id))->assertStatus(302);
        $response->assertRedirect('/posts');
    }

    public function testUpdatePost()
    {
        $this->Login();
        $faker = \Faker\Factory::create();
        $params = [
            'title' => $faker->text(20),
            'content' => $faker->text(20),
            'user_id' => auth()->user()->id,
        ];
        $newPost = Post::create($params);
        $paramsUpdate = [
            'title' => $faker->text(20),
            'content' => $faker->text(20),
        ];

        $response = $this->put(route('posts.update', $newPost->id), $paramsUpdate);
        $response->assertStatus(302)
            ->assertRedirect('/posts')
            ->assertSessionHas('message');
    }
}
