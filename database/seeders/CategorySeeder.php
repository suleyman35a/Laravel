<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             Category::create([
            'image'=> null,
            'thumbnail' =>null,
            'name' => 'Terapi',
            'content' => 'Kurumsal Terapi',
            'status' => '1',
        ]);

        Category::create([
            'image'=> null,
            'thumbnail' =>null,
            'name' => 'Terapi',
            'content' => 'Yetiskin Terapi',
            'status' => '1',
        ]);

        Category::create([
            'image'=> null,
            'thumbnail' =>null,
            'name' => 'Terapi',
            'content' => 'Cift Terapi',
            'status' => '1',
        ]);

        Category::create([
            'image'=> null,
            'thumbnail' =>null,
            'name' => 'Terapi',
            'content' => 'Ergen Terapi',
            'status' => '1',
        ]);

        Category::create([
            'image'=> null,
            'thumbnail' =>null,
            'name' => 'Terapi',
            'content' => 'Cocuk Terapi',
            'status' => '1',
        ]);
    }
}
