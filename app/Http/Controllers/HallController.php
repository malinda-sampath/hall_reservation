<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use Illuminate\Http\Request;

class HallController extends Controller
{
    public function index()
    {
        $halls = Hall::where('is_visible', true)->get();
        return view('halls.index', compact('halls'));
    }
}
