<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\User;

class UserController extends Controller
{
    public $successStatus=200;
    //Tao ham dang ky nguoi dung
    public function register(Request $request){
        //Viet validate xac thuc dang ky
        $validator= Validator::make($request->all(), 
        [
            'name'=>'required',
             'password'=>'required',
             'c_password'=>'required|same:password',
             'email'=>'required'
         ]);
         //kiem tra dieu kien validate
         if ($validator->fails()) {
             return response()->json([$validator->errors()],401);
         }
        //Neu thoa man dieu kien ta them moi nguoi dung
        $input= $request->all();
        $input['password']=bcrypt($input['password']);
        $user=User::create($input);
        //Tao token cho nguoi dung
        $success['token']=$user->createToken('localhost')->accessToken;
        $success['name']=$user->name;
        return \response()->json([$success],200);
    }
    public function login(){
        if(Auth::attempt(['email' => request('email'),
         'password' => request('password')])){
        $user=Auth::user();
        $success['token']=$user->createToken('localhost')->accessToken;
        $success['name']=$user->name;
        return \response()->json([$success],200);
         }
         return response()->json([$error='tài khoản không đúng'],401);
    }
    public function details(){
        $user=Auth::user();
        return response()->json([$user],200);
    }
}
