<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function registration(Request $request){

        try{
            $validateUser = Validator::make($request->all(),[
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'phone' => 'required',
                'password' => 'required',
            ]);

            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'Failed',
                    'errors' => $validateUser->errors()], 400);
            }

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone  = $request->phone;
            $user->password = Hash::make($request->password);
            $user->save();

            return response()->json([
                'status' => true,
                'message' => 'User Registration Successful'], 200);
        }catch (\Exception $e){
            return response()->json([
                'status' => 'failed',
                'message' => 'User Registration Failed'],400);
        }
    }

    public function login(Request $request){
        try{
            $validateUser = Validator::make($request->all(),[
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'Authentication Failed',
                    'errors' => $validateUser->errors()], 400);
            }

            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                return response()->json([
                    'status' => true,
                    'message' => 'User Logged in Successfully',
                    'token' => Auth::user()->createToken('Api Token')->plainTextToken,
                    'token_type' => 'Bearer'], 200);
            }
            else{
                return response()->json([
                    'status' => false,
                    'message' => 'Authentication Failed'], 400);
            }

        }catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'Email or Password does not match'],400);
        }
    }

    public function logout(Request $request){
        $user = Auth::user();
        $user->tokens()->delete();
        return response()->json([
            'status' => 'Success',
            'message' => 'User Logged out Successfully'
        ],200);
    }
}
