<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Todo::factory(500)->create();
    }
}
