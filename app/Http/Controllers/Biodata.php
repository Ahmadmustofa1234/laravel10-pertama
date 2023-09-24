<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Biodata extends Controller
{
    //
    public function index(){

        $data=[
            'title'=>'Home',
            'h1'=>"Selamat Datang DI Halaman Awal",
            'name'=>"Achmad Mustofa"
        ];
        
      
        return view('awal',$data);

        
    }
    public function Profil(){
        $data=[
            'title'=>'Profil',
            'nama'=>'achmad Mustofa',
            'jurusan'=>'pendidikan informatika',
            'gambar'=>'sekolah.png'

        ];
        
      
        return view('profil',$data);
    }
    public function Kampus(){
        $data=[
            'title'=>'Kampus',
            'namaKampus'=>'Universitas Trunojoyo Madura',
            'alamat'=>'Telang Bangkalan',
            'Akreditasi'=>'Baik'
        ];
        return view('kampus',$data);

    }
}