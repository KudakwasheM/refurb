<?php

namespace App\Http\Controllers;

use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
// use Session;

class AuthController extends Controller
{
    public function registerPage()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $user = new User();

        $validator = Validator::make(
            [
                'name' => 'required|max:255',
                'email' => 'required|unique:users',
                'role_id' => 'required',
                // 'password' => 'confirmed',
            ],
            [
                'name.required' => 'Name of is Required',
                'email.required' => 'Email Is Required',
                // 'password.required' => 'Password of Required',
                // 'password.confirmed' => 'Password Needs Confirmation',
            ]
        );

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->role_id = 4;
            $user->password = bcrypt($request['password']);

            $user->save();

            if ($user->save()) {
                $ru = new RoleUser();
                $ru->role_id = $user->role_id;
                $ru->user_id = $user->id;

                $ru->save();

                if ($ru->save()) {
                    return redirect("/login")->with('success', 'Successfully Registered Account You May Login');
                }
            }
        }
    }

    public function loginPage()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->put('id', Auth::user()->id);
            switch (Auth::user()->role->name) {
                case 'Admin':
                    return redirect()->intended('/dashboard')->with('success', 'You have successfully logged in!');
                    break;
                case 'Manager':
                    return redirect()->intended('/dashboard')->with('success', 'You have successfully logged in!');
                    break;
                case 'Datacapturer':
                    return redirect()->intended('/dashboard')->with('success', 'You have successfully logged in!');
                    break;
                default:
                    return redirect()->intended('/home')->with('success', 'You have successfully logged in!');
            }
        } else {
            return back()->with('error', 'Credentials Do Not Match!');
        }
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        } else {
            return redirect('/login')->with('error', 'Oops, Something went wrong try again.');
        }
    }

    public function home()
    {
        if (Auth::check()) {
            return view('home');
        } else {
            return redirect('/login')->with('error', 'Oops, Something went wrong try again.');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();

        return redirect('/login');
    }
}
