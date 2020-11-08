<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OptController extends Controller
{
     //optimis
     public function optidet()
     {
         return view('hasil.optimisdetail');
     }
     
     public function optprof()
     {
         return view('profil.optimisprofil');
     }
     
     public function optinfo()
     {
         return view('profil.optimisinfo');
     }
     public function optinfo2()
     {
         return view('profil.optimisinfo2');
     }
}
