<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 use Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register (Request $request)
    {
        //  $validator =  validator::make($request->all(),[

        //     // $validator = $request->validate([
        //      'name' => 'required|string',
        //      'user_name' =>'required|string' ,
        //      'user_scope' => 'required|string' ,
        //      'def_pos' => 'required|string' ,
        //      'email' =>'required|string|email' ,
        //      'password' => 'required|string'
        // ]);

        // if($validator->fails()){

        //  return response()->json($validator->errors());
        // }

        $fields = $request->validate([
                            'name' => 'required|string',
                            'user_name' =>'required|string' ,
                            'user_scope' => 'required|string' ,
                            'def_pos' => 'required',
                            'email' =>'required|string|email' ,
                            'password' => 'required|string'
                        ]);


        $user = User::create([
             //'id'=>auth()->id,
            'name'=>$fields['name'],
            'user_name'=>$fields['user_name'],
            'user_scope'=>$fields['user_scope'],
            'def_pos'=>$fields['def_pos'],
            'email'=>$fields['email'],
            'password'=>  Hash::make($request->password),
        ]);
        /** Enc the data */
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json(['data' => $user , 'auth_token'=> $token , 'token_type' => 'Bearer'] );
    }

    public function login (Request $request){

        if(!Auth::attempt($request->only('email','password')))
        {
           return response()->json(['message' => 'Unauthorization'] , 401);
        }
        $user = User::where('email' , $request['email'])->firstOrfail();
        $token = $user->createToken('auth_token')->plainTextToken;
     return response()->json(['message' => 'hi'.'  '. $user->name. 'welcome To home',  'auth_token'=> $token , 'token_type' => 'Bearer' ]);
    }

    public function logout(Request $request){

       auth()->user()->token->revoke();

         //2 $user = request()->user(); //or Auth::user()

         //2  $user->tokens()->where('id', $user->currentAccessToken()->id)->delete();

          // 3 $request->user()->currentAccessToken()->delete();
         // request()->user()->currentAccessToken()->delete();


         return response()->json([
             'message'=> 'Successfully logged out'
         ]);
        //  return response()->json(['done' => true]);


    }
    public function index (){
          return 'hello';
    }

}
