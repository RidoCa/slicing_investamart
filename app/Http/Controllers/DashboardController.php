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
    
    public function soal($id)
    {
        if($id==1){
            return view('beranda.soal');
        }else if($id==2){
            return view('beranda.soal2');
        }else if($id==3){
            return view('beranda.soal3');
        }else if($id==4){
            return view('beranda.soal4');
        }else if($id==5){
            return view('beranda.soal5');
        }else if($id==6){
            return view('beranda.soal6');
        }else if($id==7){
            return view('beranda.soal7');
        }else if($id==8){
            return view('beranda.soal8');
        }else if($id==9){
            return view('beranda.soal9');
        }else if($id==10){
            return view('beranda.soal10');
        }
    }
    
    public function form()
    {
        return view('beranda.formsoal');
    }
    
   
    
}
