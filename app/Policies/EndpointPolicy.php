<?php

namespace App\Policies;

use App\Models\Endpoint;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EndpointPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Endpoint  $endpoint
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Endpoint $endpoint)
    {
        return $user->id === $endpoint->user_id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        // TODO: Check their subscription level
        return count($user->endpoints) < 3;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Endpoint  $endpoint
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Endpoint $endpoint)
    {
        return $user->id === $endpoint->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Endpoint  $endpoint
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Endpoint $endpoint)
    {
        return $user->id === $endpoint->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     * 
     * Only the Endpoint's original creator can restore a model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Endpoint  $endpoint
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Endpoint $endpoint)
    {
        return $user->id === $endpoint->user_id;
    }

    /**
     * Determine whether the user can permanently delete the model.
     * 
     * Only the Endpoint's original creator can permanently delete a model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Endpoint  $endpoint
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Endpoint $endpoint)
    {
        return $user->id === $endpoint->user_id;
    }
}
