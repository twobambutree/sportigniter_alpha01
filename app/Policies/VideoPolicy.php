<?php

namespace App\Policies;

use App\Models\Access\User\User;
use App\Models\Video\Video;
use Illuminate\Auth\Access\HandlesAuthorization;

class VideoPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Video $video)
    {
      return $user->id === $video->playbook->user_id;
    }
}
