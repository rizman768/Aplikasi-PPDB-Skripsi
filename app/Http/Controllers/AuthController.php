<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use Validator;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\BIodata;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        if (Auth::check()) {
            return redirect('/index');
        }
        return view('auths.login');
    }

    public function login(Request $request){
        if (Auth::attempt($request->only('name', 'password'))) {
            if (auth()->user()->role_id=="1") {
                return redirect('/admin-dashboard');
            }
            return redirect('/index');
        }
        // dd([$request->name,$request->password]);
        Session::flash('error', 'Username atau Password Salah');
        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function register(){
        return view('auths.register');
    }

    public function user_registration(Request $request){

        User::create([
            'name' => $request->nama,
            'role_id' => 2,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
            
        ]);

        return redirect()->route('login')->with('success','Akun Anda Berhasil dibuat');
    }

    public function delete($id)
    {
        $user = User::where('id', $id)->delete();
        $biodata = Biodata::where('user_id', $id)->delete();

        return redirect('manajemenuser')->with('success','Akun telah Terhapus');
    }
}
