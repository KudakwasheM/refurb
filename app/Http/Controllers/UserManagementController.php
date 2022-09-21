<?php

namespace App\Http\Controllers;

use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->get();

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();

        return view('users.create', compact(['users']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();

        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|max:255',
                'email' => 'required|unique:users',
                'role_id' => 'required',
                'password' => 'required|confirmed',
            ],
            [
                'naemmeequired' => 'Name of is Required',
                'email.required' => 'Email Is Required',
                'email.unique' => 'Email is Already Taken',
                'password.required' => 'Password of Required',
                'password.confirmed' => 'Password Needs Confirmation',
            ]
        );

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->role_id = $request['role_id'];
            $user->password = $request['password'];

            $user->save();

            return redirect("/login")->with('success', 'Successfully Created Account You May Login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->role_id = $request['role_id'];
        $user->password = $request['password'];

        $user->save();

        if ($user->save()) {
            $role_user = RoleUser::whereUserId($user->id);

            $role_user->role_id = $user->role_id;

            $role_user->save();
        }

        return back()->with('success', 'User Upadated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
