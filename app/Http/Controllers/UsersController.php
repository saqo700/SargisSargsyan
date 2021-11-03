<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function postlogin(Request $request)
    {

        $data = $request->only('email', 'password');

//        dd($data);
        if (Auth::attempt($data)) {
            return redirect()->route('profile');
        } else {
            return redirect()->route('login')->with('error', 'Invalid email or password');
        }
    }

    public function postSignup(CreateUserRequest $request)
    {
        $data = $request->validated();

        $user = User::create($data);


        $imagePath = $data['img']->store('profile_img');

        $user->img_path = $imagePath;
        $user->save();


        return redirect()->route('login');

    }
    public function postlogout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
