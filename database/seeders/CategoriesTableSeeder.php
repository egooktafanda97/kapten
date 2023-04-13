<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Buat 10 kategori baru
        $kategori = [
            [
                "name" => "Management",
                "slug" => "management"
            ],
            [
                "name" => "Program",
                "slug" => "program"
            ],
            [
                "name" => "Data sains",
                "slug" => "data-sains"
            ],
            [
                "name" => "Catatan",
                "slug" => "catatan"
            ]
        ];
        foreach ($kategori as $value) {
            DB::table('category')->insert([
                'name' => $value['name'],
                'slug' => $value['slug'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
