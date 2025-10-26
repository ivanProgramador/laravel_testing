<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MainOperations;


class MainController extends Controller
{
    public function index(): string
    {
        return "Olá mundo";
    }

    public function showHash($numchars): void
    {
       echo"<p> tamaho padrão de hash: ". MainOperations::generateHash() ."</p>";
       echo"<p> 16 padrão: ". MainOperations::generateHash(16) ."</p>";
       echo"<p> 32 padrão: ". MainOperations::generateHash(32) ."</p>";
       echo"<p> 64 padrão: ". MainOperations::generateHash(64) ."</p>";
       echo"<p> parametro da rota : ". MainOperations::generateHash($numchars) ."</p>";

    }

  

}


