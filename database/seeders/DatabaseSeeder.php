<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(30)->create();

        $this->call([
            // CitySeeder::class,
            UserSeeder::class,
            PhoneSeeder::class,
            CompanySeeder::class,
            PostSeeder::class,
            ProfileSeeder::class,
        ]);
    }
}
