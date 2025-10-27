<?php

describe('Testando expectation api', function () {
    it('Testando uma função ', function () {
         
        $valor = 10; 

        //aqui eu vou testar duas coisas 
        //1 - se o valor é igual a 10
        //2 - se o valor é inteiro 

        expect($valor)->toBeInt()->toBe(10);


    });

    it('Testando se o valor e falso ou verdadeiro', function () {
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

     it('Testando se um valor existe dentro de uma coleção de valores ', function () {
        
        //valor que sera pesaquisado  
        $valor =10;
        
        //lista que sera testada 
        $valores =[10,20,30];
        
        //se o valor 10 existior dentro do array de valores ele vai 
        //retronar  PASS caso não ele retorna Error 

        expect($valor)->toBeIn($valores);
     });

     it('Testando se o valor devolvido é um json valido',function(){
          $valor = '{"nome":"Jose"}';

          expect($valor)->toBeJson();
     });

       it('Testando se uma expressão regular existe dentro de uma string',function(){
          $valor = "olá mundo";

          expect($valor)->toMatch("/mundo/");
     });


});
