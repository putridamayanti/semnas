<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

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

    public function akun() {
        return view('peserta.akun');
    }

    public function editakun(Request $request) {
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->fullname = $request->input('fullname');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('name'));
        $user->telp = $request->input('telp');
        $user->alamat = $request->input('alamat');
        $user->jurusan = $request->input('jurusan');
        $user->instansi = $request->input('instansi');
        $user->jkelamin = $request->input('jkelamin');
        $user->update();
        return redirect('/semnas/home');
    }

    public function validasi($id) {
        $user = User::find($id);
        $user->IsValidated = 1;
        $user->update();
        return redirect('/semnas/home');
    }

    public function decline($id) {
        $user = User::find($id);
        $user->IsValidated = 2;
        $user->update();
        return redirect('/semnas/home');
    }

}
