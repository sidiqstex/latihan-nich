<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // $this->call([
        //     ArticleCategorySeeder::class,
        //     ArticleSeeder::class
        // ]);

        User::create([
            'email' => 'zain@gmail.com',
            'name' => 'zain',
            'first_name' => 'za',
            'password' => Hash::make('123')
        ]);
    }
}
