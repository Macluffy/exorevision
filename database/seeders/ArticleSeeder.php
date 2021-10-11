<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            ["name"=>"stylo",],
            ["name"=>"voiture",],
            ["name"=>"maison",],
            ["name"=>"pomme",],
            ["name"=>"avion",],
            ["name"=>"pantalon",],
        ]);
    }
}
