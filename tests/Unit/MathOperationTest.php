<?php

use App\Services\MainOperations;

describe('Main OPerations',function(){

    it('teste de soma',function(){
        $a = 10;
        $b = 5;
        $operation="soma";

        $result = MainOperations::mathOperation($a,$b,$operation);
        expect($result)->toBe(15);
    });

     it('teste de subtracao',function(){
        $a = 10;
        $b = 5;
        $operation="subtracao";

        $result = MainOperations::mathOperation($a,$b,$operation);
        expect($result)->toBe(5);
    });

     it('teste de multiplicação',function(){
        $a = 10;
        $b = 5;
        $operation="multiplicacao";

        $result = MainOperations::mathOperation($a,$b,$operation);
        expect($result)->toBe(50);
    });

     it('teste de divisão',function(){
        $a = 10;
        $b = 5;
        $operation="divisao";

        $result = MainOperations::mathOperation($a,$b,$operation);
        expect($result)->toBe(2);
    });



});