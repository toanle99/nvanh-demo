<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Generator;
use Illuminate\Container\Container;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $faker = Container::getInstance()->make(Generator::class);
        $password = bcrypt('password');

        for ($i = 0; $i < 2000; $i++){
            $data[] = [
                'username' => $faker->unique()->name,
                'email' => $faker->unique()->email,
                'password' => $password,
            ];
        }
        $chucks = array_chunk($data, 100);
        foreach($chucks as $chucks){
            User::insert($chucks);
        }
    }
}
