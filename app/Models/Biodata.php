<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','full_name','jenis_kelamin','nik','ttl','alamat','agama','tempat_tinggal','no_hp', 'foto', 'akte', 'kk', 'ktp', 'sktm',  
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    

    public function getFoto(){
        if ($this->foto) {
            return asset('images/'.$this->full_name .'/' .$this->foto);
        }
        if ($this->jenis_kelamin == 'perempuan'){
            return asset('asset1/img/default1.png');
        }
         return asset('asset1/img/default1.jpg');
    }

}
