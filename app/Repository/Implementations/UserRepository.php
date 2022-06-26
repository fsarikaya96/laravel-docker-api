<?php

namespace App\Repository\Implementations;

use App\Repository\Interfaces\IUserRepository;
use Illuminate\Contracts\Auth\Authenticatable;

class UserRepository implements IUserRepository
{
    /**
     * Generate new Token
     * @param Authenticatable $auth
     * @return string
     */
    public function generateToken(Authenticatable $auth): string
    {
        return $auth->createToken('myApp')->accessToken;
    }
}
