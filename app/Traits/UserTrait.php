<?php

namespace App\Traits;

trait UserTrait
{
    public function isUnlimitCreatePost()
    {
        $user = auth()->user();

        return (empty($user->firstname) || empty($user->lastname) || empty($user->gender));
    }
}
