<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Biodata;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin_dashboard');
    }

    public function manajemen_user(){
        $users = User::all();

        return view('admin.manajemen_user')->with(compact('users'));
    }

    public function daftar_santri(){
        $biodata = Biodata::all();

        return view('admin.daftar_santri')->with(compact('biodata'));
    }

    public function detail_santri($id){
        $user = User::with('biodata')->where('id', $id)->first();

        return view('admin.detail_santri')->with(compact('user'));
    }

    public function delete_biodata($id)
    {
        $biodata = Biodata::where('id', $id)->delete();

        return redirect()->route('manajemenuser')->with('success','Akun telah Terhapus');
    }
}
