<?php

namespace App\Policies;

use App\User;
use App\models\Inspector;
use Illuminate\Auth\Access\HandlesAuthorization;

class InspectorPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any inspectors.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the inspector.
     *
     * @param  \App\User  $user
     * @param  \App\models\Inspector  $inspector
     * @return mixed
     */
    public function view(User $user, Inspector $inspector)
    {
        //
    }

    /**
     * Determine whether the user can create inspectors.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the inspector.
     *
     * @param  \App\User  $user
     * @param  \App\models\Inspector  $inspector
     * @return mixed
     */
    public function update(User $user, Inspector $inspector)
    {
        //
    }

    /**
     * Determine whether the user can delete the inspector.
     *
     * @param  \App\User  $user
     * @param  \App\models\Inspector  $inspector
     * @return mixed
     */
    public function delete(User $user, Inspector $inspector)
    {
        //
    }

    /**
     * Determine whether the user can restore the inspector.
     *
     * @param  \App\User  $user
     * @param  \App\models\Inspector  $inspector
     * @return mixed
     */
    public function restore(User $user, Inspector $inspector)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the inspector.
     *
     * @param  \App\User  $user
     * @param  \App\models\Inspector  $inspector
     * @return mixed
     */
    public function forceDelete(User $user, Inspector $inspector)
    {
        //
    }
}
