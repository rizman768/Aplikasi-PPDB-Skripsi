<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Notif;
use App\Models\User;
use App\Models\Biodata;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index(){
        if (Auth::check()) {
            return view('user.index');
        }
        return view('dashboard.dashboard');
    }

    public function persyaratan(Request $request){
        $notif = Notif::create([
            'user_id' => $request->id,
            'persyaratan' => 1,
            ]);

            return redirect('daftarsantri')->with('success','BERHASIL');
    }

    public function daftar_santri(){
        $santri = Biodata::all();
        if (Auth::check()) {
            return view('user.daftar_santri',compact('santri'));
        }
        return view('dashboard.daftar_santri',compact('santri'));
    }

    public function search(Request $request){
        $cari = $request->cari;
        $santri = Biodata::where('full_name', 'like', "%".$request->cari."%")->paginate();

        if (Auth::check()) {
            return view('user.daftar_santri',['santri' => $santri])->with('i', (request()->input('page', 1) - 1) * 10);
        }
        // mengambil data terakhir dan pagination 10 list
        return view('dashboard.daftar_santri',['santri' => $santri])->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
