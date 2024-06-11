<?php


namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(pt_BR);
        $users = 20;

        for ($i=0; $i<$users; $i++){
            User::create([
                'name' => $faker::random(10),
                'email' => $faker::random(10).'@gmail.com',
                'password' => bcrypt('password'),
            ]);
        }    
    }
}
