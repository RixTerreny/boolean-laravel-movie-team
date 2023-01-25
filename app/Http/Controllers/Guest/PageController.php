<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index(){

        $movies = Movie::all()
            ->sortBy("anno_uscita");
        /* $movieslast = Movie::where(); */
        return view('index',compact("movies"));
    }
}
