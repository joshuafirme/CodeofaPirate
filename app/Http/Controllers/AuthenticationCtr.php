<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Input;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Auth;
use Session;

class AuthenticationCtr extends Controller
{
    public function logIn()
    {
        $data = Input::all();

        if (Auth::attempt(['email' => $data['phone_email'], $password => $data['password']])) 
        {
            return redirect()->intended('/');  
        }
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
       
    public function handleGoogleCallback()
    {
        try {
      
            $user = Socialite::driver('google')->user();
       
            $finduser = User::where('email', $user->email)->first();
            
            if($finduser){
                Auth::login($finduser);
                Session::put('avatar', $user->avatar);
                Session::put('email', $user->name);
                return redirect()->intended('/');
            }else{
                Session::put('avatar', $user->avatar);
                Session::put('name', $user->email);
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'access_level'=> 1,
                    'password' => encrypt('12345')
                ]);
      
                Auth::login($newUser);
       
                return redirect()->intended('/');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->intended('/');
    }
}
