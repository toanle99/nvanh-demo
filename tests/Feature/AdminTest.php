<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;


class AdminTest extends TestCase
{
    public function loginAdmin()
    {
        $faker = \Faker\Factory::create();
        $user = User::create([
            'username' => $faker->unique()->name,
            'email' => $faker->unique()->email,
            'password' => 'password',
            'isAdmin' => 1,
        ]);

        $param = [
            'username' => $user->email,
            'password' => 'password',
        ];

        $this->post('/login', $param);
        return $user;
    }

    public function testGetListPostByIdUser()
    {
        $this->loginAdmin();
        $respose = $this->get(route('user.list.post', auth()->user()->id));
        $respose->assertViewIs('admin.list_post')->assertViewHas('posts');
    }

    public function testDetailUser()
    {
        $this->loginAdmin();
        $respose = $this->get(route('user.detail', auth()->user()->id));
        $respose->assertViewIs('admin.detail')->assertViewHas('user');
    }

    public function testGetListUser()
    {
        $this->loginAdmin();
        $respose = $this->get(route('admin.list'));
        $respose->assertViewIs('admin.list')->assertViewHas('users');
    }

    public function testGetListCommentByIdPost()
    {
        $this->loginAdmin();

        $faker = \Faker\Factory::create();
        $params = [
            'title' => $faker->text(20),
            'content' => $faker->text(20),
            'user_id' => auth()->user()->id,
        ];
        $newPost = Post::create($params);

        $newComment = [
            'comment_text' => $faker->text(20),
            'post_id' => $newPost['id'],
            'user_id' => auth()->user()->id,
        ];
        for($i = 0; $i < 5; $i++){
            DB::table('comments')->insert($newComment);
        }

        $respose = $this->get(route('user.detail.post', $newPost['id']));
        $respose->assertViewIs('admin.detail_post')->assertViewHas(['comments', 'postTitle', 'likes']);

    }
}
