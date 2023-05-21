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
        User::create($validated_data);
        return "Hello from register view";
    }
}
