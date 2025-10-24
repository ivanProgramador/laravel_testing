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

    public function showHash(): string 
    {
       return MainOperations::generateHash();
    }
}
