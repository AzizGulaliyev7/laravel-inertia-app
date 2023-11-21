<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function create(User $user)
    {
        return $user->email == 'user8@gmail.com';
    }

    public function edit(User $user, User $model)
    {
        return (boolean) mt_rand(0, 1);
    }
}
