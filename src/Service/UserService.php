<?php

namespace Fbalves\Fixer\Service;

use Fbalves\Fixer\Entity\User;

class UserService
{
    public function userNameToLower(User $user): string
    {
        return strtolower($user->name);
    }
}
