<?php

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/foo/bar',function(Request $request){
    dd($request->header('Cache-Control'));
});

Route::view('/form','form');
Route::post('/form/submit',function(Request $request){
    dd($request->pic->isValid());
    $pic = $request->pic;
    $pic->move()
});
