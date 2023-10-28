<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{
    //

    public function register(string $role)
    {
        if ($role != 'mahasiswa' && $role != 'dosen') {
            return view('welcome');
        }
        return view('auth.register-mahasiswa', ['role' => $role] );
    }
    public function registerProccess(Request $request)
    {
        // validasi apakah password dan konfirm password sama
        if($request->password !== $request->confirm_password){
            return redirect()->back()->withErrors('Konfirmasi Password harus sama');
        }
        // dd($request->id_number);
        Users::create([
            'fullname' => $request->fullname,
            'id_number' => $request->id_number,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);
        return redirect('/auth/login');
    }



}