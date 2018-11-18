<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Movie;
use Gate;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment= new Comment;
        $comment->body = $request->comment;
        $comment->user_id = \Auth::user()->id;
        $comment->movie_id = $request->id;
        $comment->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
//        if(Gate::denies('edit_comments' , $comment)){
//            abort(403,'Sorry this Page does not belong to you');
//        }

        return view('edit_comment',compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        \DB::table('comments')->where('id',$comment->id)->update(['body'=>$request->new_body]);
        return redirect()->route('movies.show',['id'=>$comment->movie_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        try{
            $movie_id=$comment->movie_id;
            $comment->delete();
            return redirect()->route('movies.show',['id'=>$movie_id]);
        }
        catch (\Exception $e){
            return $e->getTraceAsString();
        }

    }
}
