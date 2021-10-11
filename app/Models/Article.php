<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    protected $table="articles";
    
    protected $fillable=["name"];

    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }

    public function photo(){
        return $this->hasOne(Photo::class);
    }

}
