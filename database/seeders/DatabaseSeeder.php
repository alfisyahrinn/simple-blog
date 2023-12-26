<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        // Category::create([
        //     'name' => 'programing',
        //     'slug' => 'programing'
        // ]);
        // Category::create([
        //     'name' => 'web design',
        //     'slug' => 'web-design'
        // ]);

        $this->call(CategorySeeder::class);
        Post::factory(20)->create();

        // $this->call(PostSeeder::class);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
        //     'name' => 'alfi syahrin',
        //     'email' => 'alfisyahrin@gmail.com',
        //     'password' => bcrypt('alfi'),
        // ]);
        // User::create([
        //     'name' => 'hazard ',
        //     'email' => 'hazard@gmail.com',
        //     'password' => bcrypt('hazard'),
        // ]);
    }
}
