<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $movie = Movie::all();
        dd($movie);

        return view('welcome');
    }
}
