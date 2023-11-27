<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

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

    public function index()
    {
        return view('forgot_password');
    }

    public function Forgot()
    {
        $user = User::where('email', request('email'))->first();

        if ($user) {

            $this->sendResetLinkEmail(request());
        }

        // You can add more logic here based on whether the user exists or not
        // For now, let's just return the user object
        return $user;
    }
}
