<?php

namespace Database\Seeders;

use App\Models\Pertition;
use Illuminate\Database\Seeder;

class PertitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Pertition::factory()->times(50)->create();

    }
}
