<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;

class ResetPasswordController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function resetPassword(Request $request)
    {
        return view ('auth.reset-password', ['request' =>$request]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'token' => 'required',
            'email' =>'required|email',
            'password' => 'required|string|confirmed|min:8'
        ]);

 
        $status = Password::reset(

            $request->only('email', 'password', 'password_conformation', 'token'),

            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60)
                ])->save();

                event(new PasswordReset($user));
            }
        );

        return $status = Password::PASSWORD_RESET ? redirect()->route('login')->with('status', ($status)) :
                                                     back()->withInput($request->only('email'))
                                                           ->withErrors(['email' => __($status)]);

    }


 
}
