<?php

namespace App\Services\Implementations;

use App\Repository\Interfaces\IUserRepository;
use App\Services\Interfaces\IUserService;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;

class UserService implements IUserService
{
    private IUserRepository $userRepository;

    /**
     * Service construct injection
     * @param IUserRepository $IUserRepository
     */
    public function __construct(IUserRepository $IUserRepository)
    {
        $this->userRepository = $IUserRepository;
    }
    /**
     * Get already logged user
     *
     * @return Authenticatable|null
     */
    private function _getLoggedUser(): ?Authenticatable
    {
        return Auth::user() ?? null;
    }
    /**
     * Generate new Token
     * @param Authenticatable $auth
     * @return string
     */
    public function generateToken(Authenticatable $auth): string
    {
       return $this->userRepository->generateToken($this->_getLoggedUser());
    }
}
