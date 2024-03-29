<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Biodata;
use Auth;
use Validator;
use File;

class ProfilController extends Controller
{
    public function biodata($id, User $user){
        $user = User::where('id', $id)->first();
        
        if ( $user->biodata == NULL) {
            return view('user.tambah_biodata');
        }
        return view('user.profile',compact('user'));
    }

    public function tambah_biodata(){
        return view('user.tambah_biodata');
    }

    public function create(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'ttl' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'hp' => 'required'
        ],
        [
            'nama.required' => 'Nama Lengkap Harus Diisi',
            'nik.required' => 'NIK Harus Diisi',
            'ttl.required' => 'Tempat Tanggal Lahir Harus Diisi',
            'alamat.required' => 'Alamat Harus Diisi',
            'agama.required' => 'Agama Harus Diisi',
            'hp.required' => 'No Hp Harus Diisi',    
        ]);
        
        Biodata::create([
            'user_id' => Auth::User()->id, 
            'full_name' => $request->nama,
            'jenis_kelamin' => $request->jk,
            'nik' => $request->nik,
            'ttl' => $request->ttl,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'tempat_tinggal' => $request->tempat_tinggal,
            'no_hp' => $request->hp,
        ]);

        return redirect()->route('profile', auth()->user()->id)->with('success','Biodata Berhasil ditambahkan');
    }

    public function edit_biodata($id){
        $biodata = Biodata::where('id', $id)->first();
        return view('user.edit_biodata')->with(compact('biodata'));
    }

    public function update_biodata(Request $request)
    {        
        $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'ttl' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'hp' => 'required'
        ],
        [
            'nama.required' => 'Nama Lengkap Harus Diisi',
            'nik.required' => 'NIK Harus Diisi',
            'ttl.required' => 'Tempat Tanggal Lahir Harus Diisi',
            'alamat.required' => 'Alamat Harus Diisi',
            'agama.required' => 'Agama Harus Diisi',
            'hp.required' => 'No Hp Harus Diisi',    
        ]);

        $biodata = Biodata::where('id', $request->id)->update([
            'full_name' => $request->nama,
            'jenis_kelamin' => $request->jk,
            'nik' => $request->nik,
            'ttl' => $request->ttl,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'tempat_tinggal' => $request->tempat_tinggal,
            'no_hp' => $request->hp,
        ]);
        if (Auth::User()->role_id == 1) {
            return redirect('daftarsantri')->with('success','Berhasil Terupdate');
        }
        return redirect()->route('profile', auth()->user()->id)->with('success','Biodata Telah Terupdate');
    }

    public function edit_persyaratan($id){
        $user = User::where('id', $id)->first();

        if ( $user->biodata == NULL) {
            return view('user.tambah_biodata');
        }
        return view('user.editpersyaratan')->with(compact('user'));
    }

    public function update_persyaratan(Request $request)
    {        
        $request->validate([
            'foto'=>'nullable|mimes:jpeg,png,jpg,gif,svg',
            'akte'=>'nullable|mimes:pdf',
            'kk'=>'nullable|mimes:pdf',
            'ktp'=>'nullable|mimes:jpeg,png,jpg,gif,svg,pdf',
            'sktm'=>'nullable|mimes:pdf',
        ],[
            'foto.mimes' => 'Format FIle Harus JPG/JPEG/PNG',
            'akte.mimes' => 'Format FIle Harus PDF',
            'kk.mimes' => 'Format FIle Harus PDF',
            'ktp.mimes' => 'Format FIle Harus JPG/JPEG/PNG',
            'sktm.mimes' => 'Format FIle Harus PDF'
        ]);
        
        $biodata = Biodata::where('id', $request->id)->first();
        $nama = $biodata->full_name;

        if ($request->hasFile('foto')) {
            $imgName = $request->foto->getClientOriginalName(); 
            $foto = $request->foto->move(public_path('images/'.$nama),$imgName);
            $updatefoto = Biodata::where('id', $request->id)->update(['foto' =>  $imgName,]);
           }
        if ($request->hasFile('akte')) {
            $imgName = $request->akte->getClientOriginalName(); 
            $akte = $request->akte->move(public_path('images/'.$nama),$imgName);
            $updateakte = Biodata::where('id', $request->id)->update(['akte' =>  $imgName,]);
           }
        if ($request->hasFile('kk')) {
            $imgName = $request->kk->getClientOriginalName(); 
            $kk = $request->kk->move(public_path('images/'.$nama),$imgName);
            $updatekk = Biodata::where('id', $request->id)->update(['kk' =>  $imgName,]);
           }
        if ($request->hasFile('ktp')) {
            $imgName = $request->ktp->getClientOriginalName(); 
            $ktp = $request->ktp->move(public_path('images/'.$nama),$imgName);
            $updatektp = Biodata::where('id', $request->id)->update(['ktp' =>  $imgName,]);
           }         
        if ($request->hasFile('sktm')) {
            $imgName = $request->sktm->getClientOriginalName(); 
            $sktm = $request->sktm->move(public_path('images/'.$nama),$imgName);
            $updatesktm = Biodata::where('id', $request->id)->update(['sktm' =>  $imgName,]);
        }
        return redirect()->route('profile', auth()->user()->id)->with('success','Persyaratan telah terupdate');
    }
}
