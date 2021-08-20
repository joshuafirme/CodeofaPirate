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

class AuthenticationCtr extends Controller
{
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
                return redirect()->intended('/');
       
            }else{
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
}
