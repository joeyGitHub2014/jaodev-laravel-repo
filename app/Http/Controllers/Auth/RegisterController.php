<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create() {
        return view(auth.register);
    }

    public function  store(Request $request) { 
        $user = User::create([
                  'name'  => $request->name,
                  'email' => $request->email,
                  'password' => Hash::make($reest->passowrd) 

        ]);

        return back();

    }
}
