<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class UserLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();

        // Perform user registration or login logic here
         
            //check user exist or not 

            $data=User::where('email','=',$user->email)->first();
             if(!$data){
                //insert 
                User::create([
                    'name'=>$user->name,
                    'email'=>$user->email,
                    'password'=>encrypt("123456"),
                    'remember_token'=>'Y'
                  ]);
               return redirect()->route('welcome')
               ->with('msg','New User Added Successfully..');
             }
             else
             {
                return redirect()->route('welcome')
                ->with('msg','New User Already Exist..'); 
             }

         //print_r($user);
        //return redirect()->route('home');
    }
}
