<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MovieUpload;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;


class MovieUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.movie-upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'movie_title'=> 'required',
            'movie_type'=>'required',
            'movie_descr'=>'required',
            'movie_hr'=>'required',
            'movie_mins'=>'required',
            'movie_lang'=>'required',
            'movie_catr'=>'required',
            'movie_link'=>'required',
            'movie_price'=>'required',
            'movie_date'=>'required',
            'state'=>'required',
            'loc'=>'required',
            'movie_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6048',
            //'' => 'image|mimes:jpeg,png,jpg,gif,svg|max:6048',
        ]);

        $input = $request->all();

        if($image = $request->file('movie_img'))
        {
            //$email = Auth::user()->email;
            $destinationPath = 'movies/';
            $name = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $name);
            $input["movie_img"] = "$name";
        }
        MovieUpload::create($input);
        return redirect()->route('admin.index')
                                ->with('success','Movie Uploaded successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movies = movieUpload::paginate(10);
        return view('admin.show', compact('movies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movies = MovieUpload::find($id);
        return view('admin.edit', compact('movies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = movieUpload::find($id);
        $movie->delete();
     
        return redirect()->route('/admin')
                        ->with('success','Movie deleted successfully');
    }

    public function getDescr(movieUpload $movieDescr)
    {
        $other_movies = movieUpload::inRandomOrder()->get();

        return view('user.movie-descr', ['movie' => $movieDescr], ['other_movies' => $other_movies]);
    }
}
