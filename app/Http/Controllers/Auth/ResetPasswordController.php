<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use App\User;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/ ';

    public function showResetForm(Request $request, $token = null)
    {
        $user = User::where('forgottenPasswordToken', $token)->first();
        if($user){
            $email = $user->email;
            return view('auth.passwords.reset')->with(
                ['token' => $token, 'email' => $email]
            );
        }
    }
    protected function rules()
    {
        return [
            'token' => 'required',
            'password' => 'required|confirmed|min:8|string|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
        ];
    }

    protected function validationErrorMessages()
    {
        return [
            'password.regex'=>'Password should contain A~Z, a~z, 0~9',
        ];
    }

    protected function credentials(Request $request)
    {
        return $request->only(
            'email', 'password', 'password_confirmation', 'token'
        );
    }
    protected function sendResetFailedResponse(Request $request, $response)
    {
        return redirect()->back()
                    ->withInput($request->only('email'))
                    ->withErrors(['email' => trans($response)]);
    }
}
