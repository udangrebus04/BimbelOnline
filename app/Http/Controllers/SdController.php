<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SdController extends Controller
{
    public function index(){
        return view('siswa.sd.index');
    }
}
