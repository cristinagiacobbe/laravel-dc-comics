<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class GuestController extends Controller
{
    public function show(Comic $comic)
    {
        /*     dd($comic); */
        return view('show', compact('comic'));
    }
}
