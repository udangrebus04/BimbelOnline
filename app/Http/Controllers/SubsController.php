<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubsController extends Controller
{
    public function subs(){
        return view('subs');
    }

    public function subs2(){
        return view('subs2');
    }

    public function subs3(){
        return view('subs3');
    }
}
