<?php

namespace App\Policies;

use App\Comment;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommentPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @param User $user
     * @param Comment $comment
     * @return void
     */
    public function edit_comments(User $user, Comment $comment)
    {
        return $user->owns($comment);
//        return $user->owns($comment);
    }
}
