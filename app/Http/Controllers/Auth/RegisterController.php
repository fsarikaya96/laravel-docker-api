<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\ResponseCodes;
use App\Helpers\ResponseResult;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Register User
     * @param Request $request
     * @return object
     */
    public function register(Request $request): object
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);
        if ($validate->fails()) {
            return ResponseResult::generate(false, $validate->messages()->all(), ResponseCodes::HTTP_FORBIDDEN);
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return ResponseResult::generate(true, $user, ResponseCodes::HTTP_OK);
    }
}
