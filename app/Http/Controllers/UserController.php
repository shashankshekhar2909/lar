<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function postSignUp(Request $request)
    {
      $email=$request['email'];
      $name=$request['name'];
      $contact=$request['contact'];
      $password=bcrypt($request['password']);
      $user = new User();
      $user->email=$email;
      $user->name=$name;
      $user->contact=$contact;
      $user->password=$password;
      $user->save();
      return redirect()->back();
    }
    public function postSingIn(Request $request)
    {

    }
}
