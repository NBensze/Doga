<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FilmGenre extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ["Film_Gen_Genre"];

    public function filmgenre(){
        return $this->belongsTo(FilmGenre::class);
    }
}
