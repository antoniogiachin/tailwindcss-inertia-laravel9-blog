<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function store(Request $request){
        $data = $request->validate(
            [
                'name' => 'required',
                'email' => 'required| email',
                'password' => 'required|min:6',
            ]
        );

        $passHash = Hash::make($data['password']);
        $data['password'] = $passHash;

        $user = new User();
        $user->fill($data);
        $user->save();

        return redirect()->route('home');
    }
}
