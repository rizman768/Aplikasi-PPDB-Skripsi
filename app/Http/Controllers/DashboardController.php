<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        if (Auth::check()) {
            return view('user.index');
        }
        return view('user.dashboard');
    }

    public function notif(){
        echo ("Persyaratan Anda Sudah Lengkap Silahkan Tunggu kabar selanjutnya");

        return redirect('index');
    }
}
