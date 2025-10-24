<?php

use App\Services\MainOperations;

test('testar se esta sendo gerada uma hash',function(){

    
    $hash = MainOperations::generateHash(); 
    

    //testando se relamente existem 32 caracteres vindo desse serviço
     
    expect(strlen($hash))->toBe(32);

     
});
