<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use Faker\Generator;
use Illuminate\Container\Container;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::take(20)->get()->pluck('id')->toArray();
        $faker = Container::getInstance()->make(Generator::class);
        $data = [];
        $posts = Post::pluck('id')->toArray();
        
        $chucks = array_chunk($posts, 1000);

        foreach ($chucks as $chucks) {
            foreach ($chucks as $index) {
                $range = rand(1,20);
                for ($i = 0; $i < $range; $i++) {
                    $data[] = [
                        'user_id' => $users[array_rand($users)],
                        'post_id' => $index,
                        'comment_text' => $faker->text(50),
                    ];
                }
            }
            $chuck = array_chunk($data, 1000);
            foreach ($chuck as $chuck) {
                Comment::insert($chuck);
            }
            $data = [];
        }
    }
}
