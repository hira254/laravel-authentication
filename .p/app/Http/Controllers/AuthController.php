<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function registerForm(){
        return view("register");
    }
    public function register(Request $request){
$request->validate([
    "name"=> "required|string",
    "email"=>"required|email|unique:users",
    "password"=>"required|min:4|max:10"
]);

$user = User::create([
"name"=>$request->name,
"email"=>$request->email,
"password"=>Hash::make($request->password)
]);
return redirect("/login");
    }
    public function loginForm(){
        return view("login");
    }
    public function login(Request $request){
         $credentials = $request->only("email", "password");
         if(Auth::attempt($credentials)){
            return redirect("/dashboard");
         }

         return back()->withErrors([
            "email"=>"invalid credentials"
         ]);
    }
    public function logout(){
auth::logout();
return redirect("/login");
    }
    public function dashboard(){
        return view("dashboard");
    }
}
