<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Do whatever that can populate the table
        DB::table('categories')->insert([
            ['name' => 'Gummies'],
            ['name' => 'Lollipops'],
            ['name' => 'Caramel']
        ]);
    }
}
