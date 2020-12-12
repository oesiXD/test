<?php

    namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use Auth;

    class AuthController extends Controller
    {

        public function login(Request $request){

            $request->validate([

                "email"=> 'required|email|string',
                'password'=>'required|string'
            ]);

            if(!Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                return response()->json([
                    'message' => 'Unauthorized',
                    'status_code' => 401
                ],401);

            }

            $user = $request->user();

            $tokenData = $user->createToken("Token",["users"]);
            $token = $tokenData->token;
            $token->expires_at = Carbon::now()->addWeeks(1);

            if($token->save()){
                return response()->json([
                    'user' => $user,
                    'access_token' => $tokenData->accessToken,
                    'token_type' => 'Bearer',
                    'token_scope' => $tokenData->token->scopes[0],
                    'expires_at' => Carbon::parse($tokenData->token->expires_at)->toDateTimeString()
                ],200);
            }else{
                return response()->json([
                    'message'=> 'Algo ocurrio, por favor intente denuevo',
                    'status_code' => 500
                ],500);
            }
        }

    }


