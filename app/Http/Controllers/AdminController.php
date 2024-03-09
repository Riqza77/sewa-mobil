<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dashboard',[
            'title' => 'Dashboard Admin'
        ]);
    }

    public function users()
    {
        return view('admin.users',[
            'user' => User::all()
        ]);
    }

    public function usersp(Request $request)
    {
        dd($request->all());
    }

    public function usersd($id)
    {
        User::find($id);
    }

    public function userse(Request $request,$id)
    {
        dd($request->all());
        User::find($id);
    }

    public function mobils()
    {
        return view('admin.mobils',[
            'mobil' => Mobil::all()
        ]);
    }

    public function mobilsp(Request $request)
    {
        dd($request->all());
    }

    public function mobilsd($id)
    {
        Mobil::find($id);
    }

    public function mobilse(Request $request,$id)
    {
        dd($request->all());
        Mobil::find($id);
    }

}
