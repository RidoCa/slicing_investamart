<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OprController extends Controller
{
     //oportunis
     public function oprdet()
     {
         return view('hasil.oportunisdetail');
     }
     
     public function oprprof()
     {
         return view('profil.oportunisprofil');
     }
     
     public function oprinfo()
     {
         return view('profil.oportunisinfo');
     }
     public function oprinfo2()
     {
         return view('profil.oportunisinfo2');
     }
}
