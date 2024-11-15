<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        return view("AddFilm");
    }

    public function store(Request $Req)
    {
       $Req->validate([
           'Film_Name' => "required|string|max:255",
           'Film_Producer' => "required|string|max:255",
           'Film_Genre' => "required|string|max:255",
           'Film_Release' => "required|date",
       ]);

       $Film = Film::create([
        'Film_Name' => $Req->Film_Name,
        'Film_Producer' => $Req->Film_Producer,
        'Film_Genre' => $Req->Film_Genre,
        'Film_Release' => $Req->Film_Release,
       ]);

       return redirect()->back()->with('success', 'Film stored.');
    }
}
