<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('profile')
        ->with('name', 'Alfina Salsabilla')
        ->with('nama', 'Alfina')
        ->with('nim', '2141720044')
        ->with('kelas', 'TI-2G')
        ->with('absen', '03')
        ->with('prodi', 'D-4 TI')
        ->with('jurusan', 'Teknologi Informasi');
    }
}
