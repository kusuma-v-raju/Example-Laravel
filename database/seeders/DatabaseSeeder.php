<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
         // Call every seeder you want to execute
         $this->call([
            CategorySeeder::class,
            // CandySeeder::class,
        ]);
    }
}
