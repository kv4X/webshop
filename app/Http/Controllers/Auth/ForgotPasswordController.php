<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

use App\User;
use App\Notifications\ResetPassword;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\API\ForgotPasswordEmailRequest;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Send a reset link to the given user.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendResetLinkEmail(ForgotPasswordEmailRequest $request)
    {
        $email = $request->email;
        $resetUrlForReplace = urldecode($request->resetUrl);

        $user = User::where('email', $email)->first();
        if(!$user)
        {
            return response()->json([
                'success' => false,
                'message' => 'User not found!',
            ], 404);
        }

        $token = $this->broker()->createToken($user);
        $user->sendPasswordResetNotification($token);
    }
}
