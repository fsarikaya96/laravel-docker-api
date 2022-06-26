<?php

namespace App\Services\Interfaces;

use Illuminate\Contracts\Auth\Authenticatable;

interface IUserService
{
    /**
     * Generate new Token
     * @param Authenticatable $auth
     * @return string
     */
    public function generateToken(Authenticatable $auth):string;
}
