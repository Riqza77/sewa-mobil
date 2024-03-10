<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (auth()->user()->level != 1) {
                return redirect('/');
            }

            return $next($request);
        });
    }

    public function index()
    {
        return view('admin.dashboard',[
            'title' => 'Dashboard Admin'
        ]);
    }

    public function users()
    {
        return view('admin.users',[
            'user' => User::all(),
            'title' => 'Manajemen Pengguna'
        ]);
    }

    public function usersp(Request $request)
    {
        
        User::create(array_merge($request->all(),[
            'password' => bcrypt($request->password),
        ]));
        return redirect('/users')->with('success','Data Berhasil di Tambahkan');
    }

    public function usersd($id)
    {
        User::find($id)->delete();
        return redirect('/users')->with('success','Data Berhasil di Hapus');
    }

    public function userse(Request $request,$id)
    {
        // dd($request->all());
        $user = User::find($id);

        $user->update(array_merge($request->all(),[
            'password' => bcrypt($request->password),
        ]));
        return redirect('/users')->with('success','Data '.$user->nama.' Berhasil di Update');
    }

    public function mobils()
    { 
        return view('admin.mobils',[
            'mobil' => Mobil::all(),
            'title' => 'Manajemen Mobil'
        ]);
    }

    public function mobilsp(Request $request)
    {
        $gambar = '';
        if ($request->gambar) {

            $gambar = str_replace('mobil/', '', $request->file('gambar')->store('mobil'));
        }


        Mobil::Create(array_merge($request->all(), [
            'gambar'     => $gambar,
            'status'    => 1,
        ]));
        return redirect('/mobils')->with('success', 'Data Berhasil Di Ditambahkan');
    }

    public function mobilsd($id)
    {
        $mobil = Mobil::find($id);
        Storage::delete('mobil/' . $mobil->gambar);
        $mobil->delete();
        return redirect('/mobils')->with('success', 'Data Mobil Berhasil Di Dihapus');

    }

    public function mobilse(Request $request,$id)
    {
        $mobil = Mobil::find($id);
        $gambar = $mobil->gambar;



        if ($request->gambar) {

            if ($mobil->gambar) {

                Storage::delete('mobil/' . $mobil->gambar);
            }
            $gambar = str_replace('mobil/', '', $request->file('gambar')->store('mobil'));
        }

        Mobil::where('id', $request->id)->update(array_merge($request->except(['_token']), [
            'gambar' => $gambar
        ]));
        return redirect('/mobils')->with('success', 'Data Mobil Berhasil Di Update');
    }

}
