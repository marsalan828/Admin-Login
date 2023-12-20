<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only(['email','password']);
        if(Auth::attempt($credentials)){
            $user = Auth::user();
            if($user->is_admin){
                return response()->json(['message'=>'Admin login successfull']);
            }else{
                return response()->json(['message'=>'User login successful']);
            }
        }
        return response()->json(['message'=>'Invalid credentials'],401);

    }
}
