<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\ResponseCodes;
use App\Helpers\ResponseResult;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ForgotPasswordController extends Controller
{
    /**
     * @param Request $request
     * @return object
     */
    public function forgotPassword(Request $request): object
    {
        $validate = Validator::make($request->all(), ['email' => 'required']);

        if ($validate->fails()) {
            return ResponseResult::generate(false, $validate->messages()->all(), ResponseCodes::HTTP_NOT_FOUND);
        }
        $status = Password::sendResetLink($request->only('email'));
        if ($status == Password::RESET_LINK_SENT) {
            Log::channel('api')->info('Request function forgotPassword()');
            Log::channel('api')->info('Password reset request sent | email :'.$request->email);
            return ResponseResult::generate(true, "Check your email box", ResponseCodes::HTTP_OK);
        }
        return ResponseResult::generate(false, "Email could not be sent to this email address", ResponseCodes::HTTP_NOT_FOUND);
    }
}
