<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Dahamikk',
            'email' => 'admin@dahamikk.com',
            'password' => bcrypt('daadminkk'),
            'role' => 1
        ]);

        $this->call([
            ProductCategorySeeder::class,
            // ProductSeeder::class,
        ]);
    }
}