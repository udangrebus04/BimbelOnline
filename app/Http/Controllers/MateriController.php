<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index(){
        return view('siswa.sd.materi');
    }

    public function matematika(){
        return view('siswa.sd.matematika');
    }
}
