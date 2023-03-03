<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Generator;
use Illuminate\Container\Container;
use App\Models\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all()->pluck('id');
        $data = [];
        $faker = Container::getInstance()->make(Generator::class);
        $chucks = array_chunk($users->toArray(), 100);

        foreach ($chucks as $chucks) {
            foreach ($chucks as $index) {
                $range = rand(1,100);
                for ($i = 0; $i < $range; $i++) {
                    $data[] = [
                        'title' => $faker->text(20),
                        'content' => $faker->text(20),
                        'user_id' => $index,
                    ];
                }
            }
            $chuck = array_chunk($data, 1000);
            foreach ($chuck as $chuck) {
                Post::insert($chuck);
            }
            $data = [];
        }
    }
}
