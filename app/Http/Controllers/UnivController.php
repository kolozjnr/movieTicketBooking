<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movieUpload;
use App\Models\UserBookingRecord;
use Illuminate\Support\Facades\DB;

class UnivController extends Controller
{
    public function index()
    {
        $movies = movieUpload::where('movie_type', 'Latest')->get();
        $latests = movieUpload::where('movie_type', 'Latest')->get();
        return view('user.index', ['movies' => $movies], ['latests' => $latests]);
    }

    public function genre()
    {
        $latests = movieUpload::where('movie_type', 'Latest')->get();
        return view('user.index', ['latests' => $latests]);
        //return view('user.genre');
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
    //movie Genres

    public function family()
    {
        $items = movieUpload::where([['movie_genre', 'family']])->get();

        return view('genre.family', compact(['items']));
    }

    public function horror()
    {
        $items = movieUpload::where([['movie_genre', 'horror']])->get();

        return view('genre.horror', compact(['items']));
    }

    public function thriller()
    {
        $items = movieUpload::where([['movie_genre', 'thriller']])->get();

        return view('genre.thriller', compact(['items']));
    }
    public function drama()
    {
        $items = movieUpload::where([['movie_genre', 'drama']])->get();

        return view('genre.drama', compact(['items']));
    }
    public function action()
    {
        $action = 'action';
        $items = movieUpload::where([['movie_genre', '=', $action]])->get();

        return view('genre.action', ['items' => $items]);
    }
    public function series()
    {
        $items = movieUpload::where([['movie_genre', 'series']])->get();

        return view('genre.series', compact(['items']));
    }
    public function kungfu()
    {
        $items = movieUpload::where([['movie_genre', 'kungfu']])->get();

        return view('genre.kungfu', compact(['items']));
    }
    public function romance()
    {
        $items = movieUpload::where([['movie_genre', 'romance']])->get();

        return view('genre.romance', compact(['items']));
    }
    public function comedy()
    {
        $items = movieUpload::where([['movie_genre', 'comedy']])->get();

        return view('genre.comedy', compact(['items']));
    }
    public function scifi()
    {
        $items = movieUpload::where([['movie_genre', 'scifi']])->get();

        return view('genre.scifi', compact(['items']));
    }

    //get user details
    public function getDetails($id)
    {
        $detail = movieUpload::find($id);
        return view('user.data', ['movieUpload' =>$detail]);
    }
   //pay for tickets
   public function pay(Request $req)
   {
       $pay = UserBookingRecord::updateOrCreate(
           ['movie_title' => $req->movie_title],
           ['user_name' => $req->user_name, 'user_email' =>$req->user_email, 'user_tel' => $req->user_tel, 'R2' => $req->R2, 'R3'=>$req->R3, 'R4'=>$req->R4]
       );
       dd($pay);
   }

   public function paystackPay(){
       return view('user.verify_transaction');
   }
}
