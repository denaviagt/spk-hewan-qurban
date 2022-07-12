<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert([
            "name"=>"Sapi Proto",
            "animal_type_id"=>1,
            "user_id"=>1,
            "image" => "sapi.jpg"
        ]);
    }
}