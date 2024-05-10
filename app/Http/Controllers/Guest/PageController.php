<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        $title = 'Movies';
        $movies = Movie::all();

        // dd($movies);

        return view('home', compact('movies', 'title'));
    }

    public function nationality(){
        $title = 'Nationality';
        // $movies = Movie::where('nationality', 'american');
        $movies = Movie::orderBy('nationality')->get();
        return view('nationality', 'title');
    }

    public function bestMovies(){
        $title = 'The Best Movies';

        $movies = Movie::where('vote', '>=', 8)
                        ->orderBy('title')
                        ->get();

        return view('home', compact('movies', 'title'));
    }


    // public function nuovaPagina(){
    //     return view('nuova-pagina');
    // }



}
