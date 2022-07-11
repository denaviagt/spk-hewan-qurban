<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animal_types')->insert([
            "name"=>"Sapi",
        ]);
        DB::table('animal_types')->insert([
            "name"=>"Kambing",
        ]);
        DB::table('animal_types')->insert([
            "name"=>"Domba",
        ]);
    }
}
