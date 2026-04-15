<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            [
                'name' => 'артем',
                'email' => Str::random(10) . '@gmail.com',
                'age' => '18',
                'salary' => '30000',
                'created_at' => '2026-02-23',
                'updated_at' => '2026-03-23',
            ],

            [
                'name' => 'эдмон',
                'email' => Str::random(10) . '@gmail.com',
                'age' => '18',
                'salary' => '30000',
                'created_at' => '2026-02-23',
                'updated_at' => '2026-03-23',
            ],
            [
                'name' => 'иван',
                'email' => Str::random(10) . '@gmail.com',
                'age' => '20',
                'salary' => '10000',
                'created_at' => '2026-02-23',
                'updated_at' => '2026-03-23',
            ]
        ]);

        DB::table('posts5')->insert(
            [
                [
                    'title' => 'Новость 1',
                    'desc' => Str::random(10),
                    'text' => Str::random(30),
                    'created_at' => '2026-02-23',
                ],

                [
                    'title' => 'Новость 2',
                    'desc' => Str::random(10),
                    'text' => Str::random(30),
                    'created_at' => '2026-02-23',
                ],
                [
                    'title' => 'Новость 3',
                    'desc' => Str::random(10),
                    'text' => Str::random(30),
                    'created_at' => '2026-02-24',
                ],
                [
                    'title' => 'Новость 4',
                    'desc' => Str::random(10),
                    'text' => Str::random(30),
                    'created_at' => '2026-02-25',
                ],
                [
                    'title' => 'Новость 5',
                    'desc' => Str::random(10),
                    'text' => Str::random(30),
                    'created_at' => '2026-02-25',
                ],
            ]
        );
    }
}
