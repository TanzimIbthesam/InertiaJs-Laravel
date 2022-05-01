<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function createUser(User $user)
    {
        return $user->id=11;
    }
    // public function editPost(User $user){
    //     return  $user->id===11;
    // }
 }
