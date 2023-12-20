<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    public function RegisterUser(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=> 'required | string | max:255',
            'email'=> 'required | email | unique:users',
            'password'=> 'required | min:8',
            'is_admin'=>'required',
        ]);

        if($validator->fails()){
            return response()->json(['error'=> $validator->errors()],422);
        }

        $user = new User;
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=bcrypt($request->input('password'));
        $user->is_admin=$request->input('is_admin');

        $user->save();

        return response()->json(['message'=>'User created successfully'],200);

    }
}
