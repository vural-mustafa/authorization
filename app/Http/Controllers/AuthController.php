<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; 

class AuthController extends Controller
{
    public function login(request $request){
        if($request->method()=='GET'){
            return view('auth.login');
        }
        else if($request->method()=='POST'){
              $data =$request->only('email','password');
        if(Auth::attempt($data)){
            //Login success';
            return redirect(route('home'))->with('login','success');
        }else{
            //Login Failed';
            return redirect()->back()->with('login','failed');
        }
        }
      
    }
    public function register(request $request){
        if($request->method()=='GET'){
            return view('auth.register');
        }else if($request->method()=='POST'){
            $data =$request->only('name','email','password');
            $data['password'] = bcrypt($data['password']);
            User::create($data);
            return redirect(route('login'))->with('register','Registration successful');
        }
    }

    public function logout(request $request){
        auth()->logout();
        return redirect(route('login'))->with('register','Session closed successfully');
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }
}
