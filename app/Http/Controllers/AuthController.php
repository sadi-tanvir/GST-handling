<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function loginView(): View
    {
        $data = ['title' => "Login"];
        return view("auth.login", $data);
    }

    public function registerView(Request $request): View
    {
        $data["title"] = "Register";
        return view("auth.register", $data);
    }

    public function registerPost(Request $request)
    {
        $hasPassword = Hash::make($request->password);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $hasPassword;

        // $user->save();

        dd($request->all());
    }

    public function forgotPasswordView(): View
    {
        return view("auth.forgotPassword");
    }
}
