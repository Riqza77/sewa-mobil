<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home',[
            'title' => 'home'
        ]);
    }
    public function mobil()
    {
        return view('mobil',[
            'title' => 'mobil',
            'mobil' => Mobil::all()
        ]);
    }
    public function detailmobil(Mobil $mobil)
    {
        return view('detail',[
            'title' => 'mobil',
            'mobil' => $mobil
        ]);
    }
    public function register()
    {
        return view('register',[
            'title' => 'register',
            'user'  => User::where('level',1)->count()
        ]);
    }
    public function login()
    {
        return view('login',[
            'title' => 'login'
        ]);
    }
    
    public function registerp(Request $request)
    {
        $valid = $request->validate([
            'username' => 'required|unique:users',
        ],[
            'username.unique' => 'Username sudah digunakan Akun Lain',
        ]);
        if ($request->level) {
            $user = User::Create(array_merge($request->all(),[
                'password' => bcrypt($request->password),
            ]));
        } else {
            $user = User::Create(array_merge($request->all(),[
                'password' => bcrypt($request->password),
                'level'  => 2,
            ]));
        }
        
        return redirect('/login')->with('success','Registrasi Berhasil, Silahkan Login');
    }
    public function loginp(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->level == 1) {
                return redirect()->intended('dashboard')->with('success','Berhasil Login');
            } else {
                return redirect()->intended('/mobil')->with('success','Berhasil Login');
            }
            
        }
        return redirect('login');
    }
    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('success','Logout Berhasil');
    }
    
}
