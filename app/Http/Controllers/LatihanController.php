<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;

class LatihanController extends Controller
{
    public function index()
    {
        $data =  [
            'fullname' => 'Dimas Sebrang',
            'email' => 'dimas12@gmail.com'
        ];
        $user = Mahasiswa::create($data);
        dd($user);
    }
    
    public function about() {

        return view('about');
    }

}