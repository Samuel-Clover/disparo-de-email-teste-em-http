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

Route::get('/', function () {
    // Mail::send('emails.disparoemail',["newemail" => "subscrible"], function ($envio) {
    //     $envio->from(seu email);
    //     $envio->to('seu email');
    // });
    return view('welcome');
});


