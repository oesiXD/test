<?php

    namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;

use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
    {

        public function register(Request $request){

            $request->validate([
                'email'=>'required|email|string',
                'password'=>'required|string'
            ]);

            $users = new User();
            $users->email = $request->email;
            $users->password = bcrypt($request->password);
            if($users->save()){
                return response()->json([
                    "message"=>'Usuario creado satisfactoriamente',
                    'status_code' => 500
                ],500);
            }else{
                return response()->json([
                    "message"=>"Ocurrio un error",
                    "status_code"=>201
                ],201);
            }
        }

        public function login(Request $request){

            $request->validate([
                "email"=> 'required|email|string',
                'password'=>'required|string'
            ]);
            if(!FacadesAuth::attempt(['email' => $request->email, 'password' => $request->password])){
                return response()->json([
                        'message' => 'Unauthorized',
                        'status_code' => 401
                ],401);
            }
            $user = Auth::user();
            $user['data']  = DB::table("mdluu_user")->where("email",$request->email)->first();

            $tokenData = $user->createToken("Personal access token",["can_view"]);
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

        public function logout(Request $request){

            $request->user()->token->revoke();
            return response()->json([
                "message"=> "Se ha deslogeado sin problemas",
                "status_code"=> 200
            ],200);
        }

    }


