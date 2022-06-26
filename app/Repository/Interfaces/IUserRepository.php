<?php

namespace App\Repository\Interfaces;

use Illuminate\Contracts\Auth\Authenticatable;

interface IUserRepository
{
    /**
     * Generate new Token
     * @param Authenticatable $auth
     * @return string
     */
    public function generateToken(Authenticatable $auth) :string;
}
