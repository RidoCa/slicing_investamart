<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YoloController extends Controller
{
    //yolo
    public function yoldet()
    {
        return view('hasil.yolodetail');
    }
    
    public function yolprof()
    {
        return view('profil.yoloprofil');
    }
    
    public function yolinfo()
    {
        return view('profil.yoloinfo');
    }
    
    public function yolinfo2()
    {
        return view('profil.yoloinfo2');
    }
}
