<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
            DB::table('posts')->insert([

				['title' => 'title 1',
				'slug'  => 'post-1',
                'likes' => '10',
                'created_at' => '2025-04-15',
				'updated_at'  => '2025-05-26'],

                ['title' => 'title 2',
				'slug'  => 'post-2',
                'likes' => '11',
                'created_at' => '2025-08-27',
				'updated_at'  => '2025-11-14'],

                ['title' => 'title 3',
				'slug'  => 'post-3',
                'likes' => '12',
                'created_at' => '2025-12-01',
				'updated_at'  => '2025-12-08'],

			]);

            DB::table('users')->insert([

				['name' => 'Artem',
				'email' => Str::random(10).'@gmail.com',
                'age' => '18',
                'salary' => '5000',
                'created_at' => '2024-04-15',
				'updated_at'  => '2024-05-26'],

                ['name' => 'Edmon',
				'email' => Str::random(10).'@gmail.com',
                'age' => '19',
                'salary' => '7000',
                'created_at' => '2024-06-17',
				'updated_at'  => '2024-08-08'],

                ['name' => 'Polina',
				'email' => Str::random(10).'@gmail.com',
                'age' => '17',
                'salary' => '4000',
                'created_at' => '2024-11-12',
				'updated_at'  => '2024-12-03'],

			]);



    }
}
