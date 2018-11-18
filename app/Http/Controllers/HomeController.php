<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
//        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $new_movies = DB::table('movies')->orderBy('created_at','desc')->limit(4)->get();
        if(\Auth::user() && \Auth::user()->is_admin == 1) {
            return view('admin.index');
        }
        elseif (! \Auth::user() || \Auth::user()->is_admin == 0){
            return view('home',compact('new_movies'));
        }
    }

    public function home()
    {
        $new_movies = DB::table('movies')->orderBy('created_at','desc')->limit(4)->get();
        return view('home',compact('new_movies'));
    }
}
