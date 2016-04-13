<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->can('access.admin')) {
            $user = User::all();
            return view('admin.home', ['peserta'=>$user]);
        } elseif (auth()->user()->can('access.peserta')) {
            return view('peserta.home');
        }
    }
}
