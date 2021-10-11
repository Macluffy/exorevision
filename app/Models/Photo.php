<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable=["comment","article_id"];

    public function article(){
        return $this->belongsTo(Article::class);
    }
}
