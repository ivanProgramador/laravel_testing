<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//definindo um paramentro opcional pra rorta que chama o metodo da hash 

Route::get('/show-hash/{numchars?}',[MainController::class,'showHash']);