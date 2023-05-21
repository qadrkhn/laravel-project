<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Models\User;

class UserController extends Controller
{
    public function registerUser(Request $request){
        $validated_data = $request->validate([
            'username' => ['required','min:3','max:10',Rule::unique('users','username')],
            'email' => ['required','email',Rule::unique('users','email')],
            'password' => ['required','min:6','confirmed']
        ]);
        $validated_data['password'] = bcrypt($validated_data['password']);
        $user = User::create($validated_data);
        auth()->login($user);
        return redirect('/')->with('success','Account created successfully. You are now logged in.');
    }
    public function loginUser(Request $request){
        $validated_data = $request->validate([
            'loginusername' =>  'required',
            'loginpassword' => 'required'
        ]);
        if(auth()->attempt(['username' => $validated_data['loginusername'],'password' => $validated_data['loginpassword']])){
            $request->session()->regenerate();
            return redirect('/')->with('success','You are now logged in.');
        }else{
            return redirect('/')->with('fail','Invalid login credentials.');
        }
    }
    public function logoutUser(){
        auth()->logout();
        return redirect('/')->with('success','You are now logged out.');;
    }
}
