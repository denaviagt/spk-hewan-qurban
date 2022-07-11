<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriteriaAnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('criteria_animals')->insert([
            "animal_id"=>1,
            "criteria_id"=>1,
            "value"=>"2",
            "score"=>1
        ]);
        DB::table('criteria_animals')->insert([
            "animal_id"=>1,
            "criteria_id"=>2,
            "value"=>"200",
            "score"=>0.7
        ]);
        DB::table('criteria_animals')->insert([
            "animal_id"=>1,
            "criteria_id"=>3,
            "value"=>"Putih",
            "score"=>1
        ]);
        DB::table('criteria_animals')->insert([
            "animal_id"=>1,
            "criteria_id"=>4,
            "value"=>"Jantan",
            "score"=>1
        ]);
        DB::table('criteria_animals')->insert([
            "animal_id"=>1,
            "criteria_id"=>5,
            "value"=>"Ya",
            "score"=>1
        ]);
        DB::table('criteria_animals')->insert([
            "animal_id"=>2,
            "criteria_id"=>1,
            "value"=>"1",
            "score"=>0.01
        ]);
        DB::table('criteria_animals')->insert([
            "animal_id"=>2,
            "criteria_id"=>2,
            "value"=>"300",
            "score"=>1
        ]);
        DB::table('criteria_animals')->insert([
            "animal_id"=>2,
            "criteria_id"=>3,
            "value"=>"Coklat",
            "score"=>0.25
        ]);
        DB::table('criteria_animals')->insert([
            "animal_id"=>2,
            "criteria_id"=>4,
            "value"=>"Betina",
            "score"=>0.5
        ]);
        DB::table('criteria_animals')->insert([
            "animal_id"=>2,
            "criteria_id"=>5,
            "value"=>"Ya",
            "score"=>1
        ]);
    }
}
