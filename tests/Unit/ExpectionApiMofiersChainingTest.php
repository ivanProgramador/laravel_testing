<?php

describe('Testando Modifiers e chaning ', function () {
    
    
    it('testando modificador and()',function(){
        
        $nome ="João";
        $sobrenome ="Silva";

        expect($nome)->toBe("João")->and($sobrenome)->toBe("Silva");
    });

    it('testando se o valor é um ou outro',function(){
        
        $valor = 10;

        expect($valor)->toBeIn([10,20]);
    });

    it('testando o modificador not() ',function(){
        
        $valor = 10;

        expect($valor)->not()->toBe(20);
    });

    //testando sequencias

    it('testando sequencias de modificadores ',function(){
          
        $valores = [1,2,3];
        
        //no caso o modificador sequance testa se os valores dos indices 
        //estão exatamente na ordem estebelecida pela fn qualquer valor 
        //fora da ordem falha o teste
       
        expect($valores)->sequence(
        
            /*1*/   fn($item) => $item->toBe(1),
           /*2*/    fn($item) => $item->toBe(2),
           /*3*/    fn($item) => $item->toBe(3)
        );
    });
    
    

});
