<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Film extends Model
{
    use SoftDeletes, HasFactory;
    
    protected $fillable = ["Film_Name", "Film_Producer", "Film_Genre", "Film_Release"];
}
