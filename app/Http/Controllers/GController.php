<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GController extends Controller
{
    public function redirToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function googleCallback()
    {
        try{
            $user = Socialite::driver('google')->stateless()->user();

            $find = User::where('google_id', $user->getId())->first();
            if($find){
                Auth::login($find);
                return redirect('/user');
            }else{
                $addUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => bcrypt(rand())
                ]);
                Auth::login($addUser);
                return redirect('/user');
            }
        }
        catch(Throwable $th){
            throw $th;
        }
    }
}
