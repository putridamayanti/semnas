<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class PesertaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function peserta($id) {
        $user = User::find($id);
        return view('admin.peserta', ['peserta'=>$user]);
    }

    public function validasi($id) {
        $user = User::find($id);
        $user->IsValidated = 1;
        $user->update();
        return redirect('/home');
    }

    public function decline($id) {
        $user = User::find($id);
        $user->IsValidated = 2;
        $user->update();
        return redirect('/home');
    }
}
