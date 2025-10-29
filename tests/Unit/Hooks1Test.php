<?php

//dentro desse codigo são pre-definidas configurações globais para os testes
//no caso eu fiz a definicção de 2 variaveis
//então essa função é um hook que será executado antes dos testes  

BeforeEach(function(){
    $this->number1 =10;
    $this->number2 =20;
});


//que seram testadas aqui abaixo

describe('Testes com hooks',function(){

     it('Teste 1',function(){
         $value = 10;
         expect($this->number1)->toBe(10);
     });

     it('Teste 2',function(){
         $value = 10;
         expect($this->number2)->toBe(20);
     });
});

//aqui eu faço a alimpeza das variveis qque eu cririo , apos os teste serem executados
//enetão essa funcção é um hook que será executado depois dos testes
 
AfterEach(function(){
    unset($this->number1);
    unset($this->number2);
});



