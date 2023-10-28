<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }
    public function loginProccess(Request $request)
    {
        $id_number = $request->id_number;
        $password = $request->password;

        // $user = auth()->attempt(['id_number' => $id_number, 'password' => $password]);

        if (auth()->attempt(['id_number' => $id_number, 'password' => $password])) {

            $role = auth()->user()->role;
            if ($role == 'dosen') {
                echo 'Berhasil login dosen';
            } else if ($role == 'mahasiswa') {
                return redirect('/mahasiswa/dashboard');
            }

        } else {
            return back()->withErrors(['credentials', 'ID NUMBER / PASSWORD SALAH']);
        }
    }
}


