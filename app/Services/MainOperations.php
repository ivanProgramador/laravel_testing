<?php

namespace App\Services;

class MainOperations
{
    public static function generateHash($numchars = 32): string 
    {
        return bin2hex(random_bytes((int)$numchars/2));
    }
}
