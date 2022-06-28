<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\ResponseCodes;
use App\Helpers\ResponseResult;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout() : object
    {
        if(Auth::check()){
            Auth::user()->oAuthAccessToken()->delete();
            return ResponseResult::generate(true, 'Successfully logged out and token deleted.', ResponseCodes::HTTP_OK);
        }
        return ResponseResult::generate(false, 'Invalid token provided', ResponseCodes::HTTP_BAD_REQUEST);
    }
}
