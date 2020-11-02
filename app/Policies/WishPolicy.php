<?php

namespace App\Policies;

use App\User;
use App\Wish;
use Illuminate\Auth\Access\HandlesAuthorization;

class WishPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any wishes.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the wishes.
     *
     * @param  \App\User  $user
     * @param  \App\Wish  $wishes
     * @return mixed
     */
    public function view(User $user, Wish $wishes)
    {
        if ($user->type === 'admin')
        {
            return true;
        }
        return $user->id === $wishes->user_id;
    }

    /**
     * Determine whether the user can create wishes.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the wishes.
     *
     * @param  \App\User  $user
     * @param  \App\Wish  $wishes
     * @return mixed
     */
    public function update(User $user, Wish $wishes)
    {
        if ($user->type === 'admin')
        {
            return true;
        }
        return $user->id === $wishes->user_id;
    }

    /**
     * Determine whether the user can delete the wishes.
     *
     * @param  \App\User  $user
     * @param  \App\Wish  $wishes
     * @return mixed
     */
    public function delete(User $user, Wish $wishes)
    {
        //
    }

    /**
     * Determine whether the user can restore the wishes.
     *
     * @param  \App\User  $user
     * @param  \App\Wish  $wishes
     * @return mixed
     */
    public function restore(User $user, Wish $wishes)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the wishes.
     *
     * @param  \App\User  $user
     * @param  \App\Wish  $wishes
     * @return mixed
     */
    public function forceDelete(User $user, Wish $wishes)
    {
        //
    }
}
