<?php

namespace App\Policies;

use App\Models\Comment;
use Auth;

class CommentPolicy {
    /**
     * Can user create the comment.
     *
     * @param mixed $user
     */
    public function create($user): bool {
        return true;
    }

    /**
     * Can user delete the comment.
     *
     * @param mixed $user
     */
<<<<<<< HEAD
    public function delete($user, Comment $comment) : bool
    {
            if(Auth::user()->isStaff) {
                return true;
            }
            else {
                return false;
            }
=======
    public function delete($user, Comment $comment): bool {
        if (auth::user()->isStaff) {
            return true;
        } else {
            return false;
        }
>>>>>>> 769ba5d841efc9bae1e24bfd8f065b0a519972b6
    }

    /**
     * Can user update the comment.
     *
     * @param mixed $user
     */
    public function update($user, Comment $comment): bool {
        return $user->getKey() == $comment->commenter_id;
    }

    /**
     * Can user reply to the comment.
     *
     * @param mixed $user
     */
    public function reply($user, Comment $comment): bool {
        return $user->getKey();
    }
}
