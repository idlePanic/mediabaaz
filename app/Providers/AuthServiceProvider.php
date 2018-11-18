<?php

namespace App\Providers;

use App\Movie;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use test\Mockery\ReturnTypeObjectTypeHint;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        \App\Comment::class => \App\Policies\CommentPolicy::class,
//        \App\Like::class => \App\Policies\LikePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return public function like_movie($related_movie)
//    {
//        return $this->movie_id == $related_movie->id;
//    }
//
//    public function like_user($related_user)
//    {
//        return $this->user_id != $related_user->id;
//    }void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('userCantLike', function ($user , $likes , $movie){
            foreach ($likes as $like){
                if($like->user_id == $user->id && $like->movie_id == $movie->id){
                    return true;
                }
            }
            return false;
        });








//        Gate::define('userCanLike',function ($user , $likeMovie ) {
////            return $like->movie_id == $movie->id;
//            return $likeMovie != $user->id;
////            return $user->
////            for ($i=0 ; $i <2 ; $i++){
////                if($likeMovie[$i]->movie_id == $movie->id) {
////                    return true;
////                }
////            }
////            return false;
//            });

//        });
        Gate::define('movie_testing',function ($movie, $movieLiked){
//            for($i=0 ; $i< count($movieLiked) ; $i++){
//                if ($movieLiked[$i]->movie_id == $movie->id)
//                    return false;
//            }
            return $movie->id == $movieLiked;
//            return $movieLiked == $movie->id;
//            return true;
        });

//        Gate::define('can_likes',function ($user , $movie , $movieLiked))
//    }
//        foreach ($this->getPermission() as $permission){
//            Gate::define($permission->name, function ($user) use($permission){
//                return $user->hasRole($permission->roles);
//            });
//        }
    }
}
