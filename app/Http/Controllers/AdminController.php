<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function RegisterAdmin(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=> 'required | string | max:255',
            'email'=> 'required | email | unique:users',
            'password'=> 'required | min:8 | confirmed',
            'is_admin'=> 'required',
        ]);

        if($validator->fails()){
            // return response()->json(['error'=> $validator->errors()],422);
            return response()->json(['message'=> 'unauthorized'],422);
        }

        $admin = new Admin;
        $admin->name=$request->input('name');
        $admin->email=$request->input('email');
        $admin->password=bcrypt($request->input('password'));
        $admin->is_admin=$request->input('is_admin');

        $admin->save();

        return response()->json(['message'=>'Admin created successfully'],200);


    }
}
