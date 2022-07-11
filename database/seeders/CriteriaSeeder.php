<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('criterias')->insert([
            "criteria"=>"Umur",
            "type"=>"Benefit",
            "weight"=>20,
        ]);
        DB::table('criterias')->insert([
            "criteria"=>"Berat",
            "type"=>"Benefit",
            "weight"=>20,
        ]);
        DB::table('criterias')->insert([
            "criteria"=>"Warna",
            "type"=>"Benefit",
            "weight"=>5,
        ]);
        DB::table('criterias')->insert([
            "criteria"=>"Jenis Kelamin",
            "type"=>"Benefit",
            "weight"=>15,
        ]);
        DB::table('criterias')->insert([
            "criteria"=>"Bebas PMK",
            "type"=>"Benefit",
            "weight"=>40,
        ]);
    }
}
