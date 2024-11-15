<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function Index()
    {
        $Films = Film::all();
        return view('Film.res', compact('subjects'));
    }
}
