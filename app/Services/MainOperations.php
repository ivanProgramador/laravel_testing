<?php

namespace App\Services;

class MainOperations
{
    public static function generateHash($numchars = 32): string 
    {
        return bin2hex(random_bytes((int)$numchars/2));
    }

      public static function mathOperation($a,$b,$operation):int|float|null
    {


         switch($operation){
            case 'soma':
                return $a + $b;
            case 'subtracao':
               return $a - $b;
            case'multiplicacao':
                return $a * $b;
            case 'divisao':
                 return $a / $b;
            default:
                return null;
            break;
         }
    }

}
