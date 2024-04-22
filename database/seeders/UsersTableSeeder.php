<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use DateInterval;
use DateTime;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create();
        $password = bcrypt('123456789');

        DB::table('users')->insert([
            'name' => "todsaporn.saelow",
            'email' => "jackpopula2534@gmail.com",
            'password' => $password,
            'roles_id' => 1
        ]);


        foreach (range(1, 20) as $index) {
            $roles = rand(1, 4);
            DB::table('users')->insert([
                'name' => $faker->userName,
                'email' => $faker->email,
                'password' => $password,
                'roles_id' => $roles
            ]);
        }
    }
}
