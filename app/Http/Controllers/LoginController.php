<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Session;

class LoginController extends Controller
{
    public function login(Request $request){
         if(Auth::attempt([
             'email' => $request->email,
             'password' => $request->password
         ])){
             $user = User::where('email', $request->email)->first();
             if($user->is_admin()){
                 Session::put('is_admin','t');
                 return redirect()->route('admin_home');
             }
             Session::put('is_admin','f');
             return redirect()->route('user_home');

         }
         return redirect()->back();
    }
}
