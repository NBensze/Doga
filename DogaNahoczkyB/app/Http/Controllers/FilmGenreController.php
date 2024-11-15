<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmGenreController extends Controller
{
    public function index()
    {
        return view("AddGenre");
    }
    //
    public function store(Request $Req)
    {
       $Req->validate(
       [
          'Film_Gen_Genre' => "required|string|255",
       ]);
    }
}
