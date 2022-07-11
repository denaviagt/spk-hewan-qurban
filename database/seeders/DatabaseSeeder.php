<?php

namespace Database\Seeders;

use App\Models\Animal;
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
        $this->call([
            UserSeeder::class,
            CriteriaSeeder::class,
            AnimalTypeSeeder::class,
            AnimalSeeder::class,
            CriteriaAnimalSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
