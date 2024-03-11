<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UserAdminRequest;
use App\Mail\ForgetPassword4;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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
    public function UserAdmin()
    {
        $users = User::all();
        return view("Back-office.users", compact("users"));
    }
    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            $request->session()->put('user_id', $user->id);
            $request->session()->put('user_name', $user->name);
            $request->session()->put('user_role', $user->role);
            $request->session()->put('user', $user);
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
        // dd($user->role);
        $user = User::create($inp);
        $user->assignRole($user->role);
        return redirect(route('login_index'))->with('success', 'Login successful');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserAdminRequest $request)
    {
        $user = $request->all();
        $user['password'] = Hash::make($request->password);
        $us = User::create($user);
        $us->assignRole($us->role);
        return redirect()->route('UserAdmin')->with('success', 'added successfully');
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
    public function update(Request $request)
    {
        $inp = $request->all();
        $user = User::find($inp['id']);
        if ($user) {
            if ($inp['password'] == '') {
                // dd($inp);
                $user->update([
                    "name" => $inp["name"],
                    "email" => $inp["email"],
                    "role" => $inp["role"],
                ]);
            } else {
                $user->update([
                    "name" => $inp["name"],
                    "email" => $inp["email"],
                    "password" => Hash::make($inp["password"]),
                    "role" => $inp["role"],
                ]);
            }
        }
        return redirect()->route("UserAdmin")->with("success", "");
    }

    public function delete(Request $request)
    {
        $user = User::find($request->id);
        // dd($user);
        $user->delete();
        return redirect()->route("UserAdmin")->with("success", "");
    }

    public function passwordforget_index()
    {
        return view("Auth.email");
    }

    public function passwordReset(Request $request)
    {
        // $validate = $this->validate($request, [
        //     "email" => "email|required",
        // ]);
        $user = User::find("email", $request->email);
        if ($user) {
            $token = Str::random(10);
            $user->remember_token = $token;
            Mail::to($user->email)->send(new ForgetPassword4($user));
        }
    }

    public function PReset()
    {
        return view("Auth.EmailReset");
    }

    public function change_password(Request $request, $token)
    {
        $validation = $this->validate($request, [
            "password" => "require|",
        ]);
        $user = User::where('remember_token', $token)->first();
        $remember_token = Str::random(30);
        $user->remember_token = $remember_token;
        $user->password = $request->password;
        $user->save();
        return redirect('login')->with('passIsChanged', 'Your Password Is Changed');
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
