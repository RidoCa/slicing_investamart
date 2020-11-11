<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//route beranda
route::get('/', 'App\Http\Controllers\DashboardController@beranda2');
route::get('/beranda', 'App\Http\Controllers\DashboardController@beranda');
route::get('/form', 'App\Http\Controllers\DashboardController@form');

//routesoal
route::get('/soal/{id}', 'App\Http\Controllers\DashboardController@soal');

//route optimis
route::get('/optimis/detail', 'App\Http\Controllers\OptController@optidet');
route::get('/optimis/profil', 'App\Http\Controllers\OptController@optprof');
route::get('/optimis/info', 'App\Http\Controllers\OptController@optinfo');
route::get('/optimis/info2', 'App\Http\Controllers\OptController@optinfo2');

//route oportunis
route::get('/oportunis/detail', 'App\Http\Controllers\OprController@oprdet');
route::get('/oportunis/profil', 'App\Http\Controllers\OprController@oprprof');
route::get('/oportunis/info', 'App\Http\Controllers\OprController@oprinfo');
route::get('/oportunis/info2', 'App\Http\Controllers\OprController@oprinfo2');

//route yolo
route::get('/yolo/detail', 'App\Http\Controllers\YoloController@yoldet');
route::get('/yolo/profil', 'App\Http\Controllers\YoloController@yolprof');
route::get('/yolo/info', 'App\Http\Controllers\YoloController@yolinfo');
route::get('/yolo/info2', 'App\Http\Controllers\YoloController@yolinfo2');




