<?php

describe('Testando expectation api', function () {
    it('Testeando um função ', function () {
         
        $valor = 10; 

        //aqui eu vou testar duas coisas 
        //1 - se o valor é igual a 10
        //2 - se o valor é inteiro 

        expect($valor)->toBeInt()->toBe(10);


    });

    it('Testando se o vaor e falso ou verdadeiro', function () {
        $valor1 = true;
        $valor2 = false; 

        expect($valor1)->toBeTrue();
        expect($valor2)->toBeFalse();
    });

    it('Testando se o valor e nulo', function () {
        $valor1 = null;

        expect($valor1)->toBeNull();
        
    });

    it('Testando se o valor e vazio', function () {
        $valor1 = '';

        expect($valor1)->toBeEmpty();
        
    });

     it('Testando se o valor é um array', function () {
        $valor1 = [];

        expect($valor1)->toBeArray();
        
    });


});
