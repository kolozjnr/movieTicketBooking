<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnivController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function genre()
    {
        return view('user.genre');
    }
}
