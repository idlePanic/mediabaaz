<?php

namespace App\Policies;

use App\Like;
use App\User;
use App\Movie;
use Illuminate\Auth\Access\HandlesAuthorization;

class LikePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @param Like $likes
     * @param User $user
     * @param Movie $movie
     * @return void
     */
//    public function cantLike(User $user ,Like $likes, Movie $movie)
//    {
//        foreach ($likes as $like){
//            if($like->user_id == $user->id && $like->movie_id == $movie->id){
//                return true;
//            }
//        }
//        return false;
//    }



//    public function likes(Like $like, Movie $movie)
//    {
////        return $like->owns($movie);
//        return true;
////        return $like->movie_id === $movie->id;
////        return $like->like_movie($movie);
////        $like->like_movie($movie);
//
////        return $like->like_user($user);
////        $like->like_movie($movie);
////        $like->like_user($user);
////        return $like;
////          $like->like_movie($movie);
////        $user->like_movie()
////        $user->like($movie);
////        $movie->
////        return $user->owns($movie);
//    }

//    public function userCanLike(User $user , Like $like)
//    {
//        return $user->id === $like->user_id;
//    }
}
