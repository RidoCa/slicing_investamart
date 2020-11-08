<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function beranda()
    {
        return view('beranda.index');
    }
    
    public function beranda2()
    {
        return view('beranda.index2');
    }
    
    public function soal()
    {
        return view('beranda.soal');
    }
    
    public function form()
    {
        return view('beranda.formsoal');
    }
    
   
    
}
