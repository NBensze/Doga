<?php

namespace App\Http\Controllers;

use App\Models\FilmGenre;
use Illuminate\Http\Request;

class FilmGenreController extends Controller
{
    public function index()
    {
        return view("AddGenre");
    }
    
    public function store(Request $Req)
    {
       $Req->validate(
       [
          'Film_Gen_Genre' => "required|string|max:255",
       ]);

       $FilmGenre = FilmGenre::create([
        'Film_Gen_Genre' => $Req->Film_Gen_Genre,
       ]);

       return redirect()->back()->with('success', 'Genre stored.');
    }
}
