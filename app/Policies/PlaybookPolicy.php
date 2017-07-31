<?php

namespace App\Policies;

use App\Models\Access\User\User;
use App\Models\Sport\Playbook;
use Illuminate\Auth\Access\HandlesAuthorization;

class PlaybookPolicy
{
    use HandlesAuthorization;

    public function edit(User $user, Playbook $playbook)
    {
        return $user->id === $playbook->user_id;
    }

    public function update(User $user, Playbook $playbook)
    {
       return $user->id === $playbook->user_id;
    }
}
