<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login_index()
    {
        return view("Auth.login");
    }
    public function register_index()
    {
        return view("Auth.register");
    }
    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            $request->session()->put('user_id', $user->id);
            $request->session()->put('user_name', $user->name);
            $request->session()->put('user_role', $user->role);
            return redirect()->route('home')->with('success', 'Login successful');
        } else {
            return back()->withErrors(['email' => 'the email or password could not be verified']);
        }
        // return view('Front-Office.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register(RegisterRequest $request)
    {
        // dd($request->all());
        $inp = $request->all();
        $user = User::create($inp);
        $request->session()->put('user_name', $user->name);
        $request->session()->put('user_role', $user->role);
        return redirect(route('login_index'))->with('success', 'Login successful');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        session()->flush();
        return redirect('/login')->with('success', 'Goodbye!!');
    }
}
