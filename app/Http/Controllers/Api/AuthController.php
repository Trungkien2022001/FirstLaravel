<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends ApiController
{
    //
    public function login(Request $req){
        $username = $req->input('username');
        $password = $req->input('password');
        $user = User::where('username' , $username);
        if(!$username || !$user) {
            return $this->respondNotFound('Username not found');
        }
        else{
            $main_user = User::where('username', $username)->where('password', $password);
            if(!$main_user) {
                return $this->respondUnauthorized('Wrong username or password');
            } else {
                return $this->respondSuccess($main_user);
            }
        }
    }
    public function test(Request $req){
        $username = $req->input('username');
        $password = $req->input('password');
        // $user = User::where('username' , $username)->first();
        $user = User::where('username', 'admin');
        return $user->toArray();
        // return '$user->toArray()';
    }
}
