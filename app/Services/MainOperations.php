<?php

namespace App\Services;

class MainOperations
{
    public static function generateHash(): string 
    {
        return bin2hex(random_bytes(16));
    }
}
