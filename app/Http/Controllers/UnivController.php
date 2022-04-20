<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movieUpload;

class UnivController extends Controller
{
    public function index()
    {
        $latests = movieUpload::where('movie_type', 'Latest')->get();
        return view('user.index', ['latests' => $latests]);
    }

    public function genre()
    {
        return view('user.genre');
        
    }

    //popuplar movies
    public function popularMovies()
    {
        $populars = movieUpload::where('');
    }

    //new Releases
    public function newReleases(movieUpload $id)
    {
        $populars = movieUpload::latest()->get();
        return view('user.new-movies', compact(['populars']));
    }
}
