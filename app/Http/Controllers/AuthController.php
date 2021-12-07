<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = User::whereEmail($credentials["email"])->first();

        if ($user && Auth::attempt($credentials)) {
            $user->last_session = new DateTime();
            $user->update();
            return redirect()->route('dashboard');
        }
        return back()->withErrors(['email' => 'Credenciales incorrectas']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
