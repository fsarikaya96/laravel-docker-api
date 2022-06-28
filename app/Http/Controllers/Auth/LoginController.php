<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\ResponseCodes;
use App\Helpers\ResponseResult;
use App\Http\Controllers\Controller;
use App\Services\Interfaces\IUserService;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    private IUserService $userService;

    /**
     * Service construct injection
     * @param IUserService $IUserService
     */
    public function __construct(IUserService $IUserService)
    {
        return $this->userService = $IUserService;
    }

    public function login(Request $request): object
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        $validate = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validate->fails()) {
            return ResponseResult::generate(false, $validate->messages()->all(), ResponseCodes::HTTP_NOT_FOUND);
        }
        if(Auth::attempt($credentials)) {
            return ResponseResult::generate(true,$this->userService->generateToken(Auth::user()), ResponseCodes::HTTP_OK);
        }
        return ResponseResult::generate(false, "No Records Found", ResponseCodes::HTTP_NOT_FOUND);
    }
}
