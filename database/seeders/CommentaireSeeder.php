<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commentaires')->insert([
            ["comment"=>"Ceci est un stylo, qui permet d'ecrire.",
            "article_id"=>1],
            ["comment"=>"Ceci est une voiture, qui permet de rouler.",
            "article_id"=>2],
            ["comment"=>"Ceci est un maison, qui permet d'avoir un toit.",
            "article_id"=>3],
            ["comment"=>"Ceci est une pomme, qui permet de se nourrire.",
            "article_id"=>4],
            ["comment"=>"Ceci est un avion, qui permet de voler.",
            "article_id"=>5],
            ["comment"=>"Ceci est un pantalon, qui permet de se vétire.",
            "article_id"=>6],
        ]);
    }
}
