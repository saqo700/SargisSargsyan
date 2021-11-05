<?php

namespace App\Http\Controllers;

use App\Events\UserCreatedEvant;
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

    public function store(CreateUserRequest $request)
    {
        $data = $request->validated();

        $user = User::create($data);
////        $imagePath = $data['img']->store('rofile_img');
//
//        $user->img_path = $imagePath;
//        $user->save();

        event(new UserCreatedEvant($user));

        return redirect()->route('login');

    }

    public function edit()
    {
        return view('users.edit', [
            'user' => Auth::user()
        ]);
    }

    public function update(Request $request)
    {
        Auth::user()->update([
           'name' => $request->name,
           'email' => $request->email,
           'password' => $request->password,
        ]);
    }

    public function postlogout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
