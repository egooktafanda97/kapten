<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        // generate 10 tags
        $tagsItems = [
            "Management",
            "Sistem Informasi",
            "Sistem Terdistribusi",
            "Php",
            "Laravel",
            "Laravel Trick",
            "Laravel Tutorial",
            "Laravel Library",
            "Javascript",
            "React Js",
            "React Native",
            "React Trick",
            "React Tutorial",
            "Css",
            "Scss",
            "Python",
            "Data Mining",
            "Experet System",
            "Neural Network",
            "Data Sains",
            "Algoritma",
            "Desktop",
            "Tutorial",
            "Trick",
            "Quots",
            "Noted",
            "Catatan"
        ];
        $tags = [];
        foreach ($tagsItems as $key => $value) {
            $tags[] = [
                'name' => $value,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // insert tags into database
        DB::table('tags')->insert($tags);
    }
}
