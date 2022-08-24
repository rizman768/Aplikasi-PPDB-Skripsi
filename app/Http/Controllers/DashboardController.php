<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Notif;
use App\Models\User;
use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;

class DashboardController extends Controller
{
    
    public function index(){
        $santri = Biodata::paginate(3);
        // if (Auth::check()) {
            return view('dashboard.dashboard_utama', compact('santri'));
        // }
        // return view('dashboard.dashboard');
    }

    public function persyaratan(Request $request){
            $notif = Notif::create([
                'user_id' => $request->user_id,
                'persyaratan' => 1,
            ]);
        $biodata = Biodata::where('user_id', $request->user_id)->update(['status' => $request->status]);    

        // Notifikasi Email jika data sudah diverifikasi
        $user = User::where('id', $request->user_id);
        Mail::to($user->email)->send(new MailNotify($user->biodata->full_name)); 

        return redirect('daftarsantri')->with('success','BERHASIL');

           
    }

    public function daftar_santri(){
        $santri = Biodata::all();
        // if (Auth::check()) {
            // return view('user.daftar_santri',compact('santri'));
        // }
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

    public function panduan(){
        return view('dashboard.panduan');
    }

    public function tentang_pondok(){
        return view('dashboard.tentang_pondok');
    }
}
