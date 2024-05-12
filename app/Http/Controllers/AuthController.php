<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use SebastianBergmann\CodeCoverage\BranchAndPathCoverageNotSupportedException;

class AuthController extends Controller
{
    public function index(){

        return view('auth.login');
    }
    public function login(Request $request){
        $validate = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if($user){
            Auth::login($user);
            return redirect()->route('home');
        }

        return back();
    }
    public function register(){

        return view('auth.register');
    }
    public function storeRegister(Request $request){
        $validate = $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed|min:7',
        ]);

        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->password = $request->password;
        $newUser->save();

        Auth::login($newUser);
        return redirect()->route('home');
    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
