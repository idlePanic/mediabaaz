<?php

namespace App\Http\Controllers;

use App\Director;
use App\Jobs\DeleteMovieJob;
use Illuminate\Http\Request;
use App\Movie;
use phpDocumentor\Reflection\Types\Null_;

class MovieController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::paginate(10);
        return view('movies',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adding_form.add_movie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'movie_name' => 'required|string|Min:3|Max:50',
            'director' => 'required|numeric|integer',
            'description' => 'required|min:50|max:700' ,
            'rate' => 'required | numeric |Integer' ,
            'casts' => 'bail|array|json' ,
//                'image' => 'required|mimes:jpeg,jpg,png'
            ],[
            'movie_name.required' => 'please enter movie name',
            'movie_name.min' => 'name must be at least 3 char',
            'movie_name.max' => 'name must be max 50 char',
            'movie_name.string' => 'name must be string',
            'director.required' => 'please choose director',
            'director.numeric' => 'must be number',
            'director.integer' => 'must be integer',
            'description.required' => 'please enter description',
            'description.min'=>'description must be at least 50 char',
            'description.max'=>'description must be max 700 char',
//            'image.required' => 'please choose images',
//            'image.image' => 'you must choose image',
//            'image.mime' => 'the image format not correct',
        ]);
        $movie = $request->all();

        $movie= new Movie();
        $movie->name = $request->movie_name;
        $movie->media_id = 1; // movie media
        $movie->rate = $request->rate;
        $movie->description = $request->description;
        $movie->director_id = $request->director;
        $movie->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('single_movie',compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }


    public function update(Request $request, Movie $movie)
    {
//        $this->validate($request,[
//            'movie_name' => 'string|Min:5|Max:50',
//        ],[
//            'movie_name.min' => 'movie must at least 5 char'
//        ]);
//        return $movie->name;
//        dd($movie);
//        dd($request);
//        dd($request->request->movie_name);
//
        if($request->movie_name != Null)
        {
           $movie->name = $request->movie_name;

        }

        if ($request->director != NULL){
            $movie->director_id = $request->director;
        }

        if($request->casts != NULL){
            foreach ( $request->casts as $cast) {
                \DB::table('cast_movie')->insert(['cast_id'=>$cast, 'movie_id'=>$movie->id]);
            }

        }
        $movie->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
//        try{
        \DB::table('movies')->where('id' , '=' , $movie->id)->delete();
//            $movie->comments->delete();
//            $movie->casts()->delete();
//            $movie->delete();
            return back();
//        }
//        catch (\Exception $e){
//            return ":(";
//        }

    }

}
