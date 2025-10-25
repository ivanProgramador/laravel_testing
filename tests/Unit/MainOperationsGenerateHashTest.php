<?php

use App\Services\MainOperations;

test('testando numeração variada de caracteres da hash',function(){
    //eu preciso de 4 assetions porque 
    //aqui eu tenho 4 testes eles são os seguintes:

    
    //qqquando um usuario não passa o valor que ele deseja para gerar a hash
    //a variável por padrão vale 32 caracteres eu estou testando isso aqui

    expect(strlen(MainOperations::generateHash()))->toBe(32);

    //tesnado se ele devolve 64 caracteres quando eu peço 64
    expect(strlen(MainOperations::generateHash(64)))->toBe(64);

    //testando se ele devolve 16 caracteres quando eu peço 16
    expect(strlen(MainOperations::generateHash(16)))->toBe(16);

    //testando se ele devolve 32 caracteres quando eu peço 32
    expect(strlen(MainOperations::generateHash(32)))->toBe(32);

    

    
     
    

     
});
