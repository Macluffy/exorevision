<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            ["image"=>"stylo.jpg",
            "article_id"=>1],
            ["image"=>"voiture.png",
            "article_id"=>2],
            ["image"=>"maison.jpg",
            "article_id"=>3],
            ["image"=>"pomme.jpg",
            "article_id"=>4],
            ["image"=>"avion.webp",
            "article_id"=>5],
            ["image"=>"pantalon.jpg",
            "article_id"=>6],
        ]);
    }
}
