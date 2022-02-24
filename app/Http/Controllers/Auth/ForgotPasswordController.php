<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Controller;

class ForgotPasswordController extends Controller
{
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPassword()
    {
        return view('auth.forgot-password');
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
            'email' =>'required|email'
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status = Password::RESET_LINK_SENT ? back()->with('status', __($status)) :
                                                     back()->withInput($request->only('email'))
                                                           ->withErrors(['email' => __($status)]);


 
    }

}
