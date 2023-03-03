<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;
use Faker\Generator;
use App\Models\User;
use App\Models\Post;
use App\Models\Like;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::take(1000)->get()->pluck('id')->toArray();
        $faker = Container::getInstance()->make(Generator::class);
        $data = [];
        $posts = Post::pluck('id')->toArray();
        ini_set('memory_limit', '-1');
        $chucks = array_chunk($posts, 100);

        foreach ($chucks as $chucks) {
            foreach ($chucks as $index) {
                $range = rand(1, 1000);
                for ($i = 0; $i < $range; $i++) {
                    $data[] = [
                        'user_id' => $users[array_rand($users)],
                        'post_id' => $index,
                    ];
                }
            }
            $chuck = array_chunk($data, 1000);
            foreach ($chuck as $chuck) {
                Like::insert($chuck);
            }
            $data = [];
        }
    }
}
