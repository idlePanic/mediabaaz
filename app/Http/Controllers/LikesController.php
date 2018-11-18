<?php

namespace App\Http\Controllers;

use App\Like;
use App\Movie;
//use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LikesController extends Controller
{
    public function addLike(Movie $movie)
    {
//        $likeMovie = DB::table('likes')->where('movie_id', '=', $movie->id)->get();
        $likes= Like::all();
        if(!\Auth::check() || \Gate::allows('userCantLike' ,[$likes,$movie] )){
            abort(403 , "sorry you can't access");
        }
            DB::table('likes')->insert(["movie_id" => $movie->id, "user_id" => \Auth::user()->id]);
            $movie->likes = $movie->likes + 1;
            $movie->save();
            return back();
    }
    public function rmvLike(Movie $movie){
        $like = Like::all();
        if(\Auth::check() && \Gate::allows('userCantLike',[$like,$movie])){
            Like::where('user_id', '=' , \Auth::user()->id)->delete();
            $movie->likes = $movie->likes-1;
            $movie->save();
            return back();
        }
    }
}
