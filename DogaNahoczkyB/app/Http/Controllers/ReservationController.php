<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $Req)
    {
       $Req->validate(
       [
          'Res_name' => "required|string|255",
          'Res_filmid' => "required|string|255",
          'Res_start' => "required|date",
          'Res_end' => "required|date",
       ]);
    }
}
