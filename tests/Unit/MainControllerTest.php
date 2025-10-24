<?php

//trazendo o main controller para dentro do arquivo de testes 

use App\Http\Controllers\MainController;

//O metodo test recebe dois párarametros 
// 1 - a descrção do teste explicando oque esta sendo testado
// 2 - uma closure que vai executar o teste de fato 

test('testando o metodo index do controller', function(){

    //criando uma instacia do Maincontroller
    $mainController = new MainController();

    //chamando o metdo index que eu quero testar 

    $result = $mainController->index();

    //testando se o index retorna uma string 

    expect($result)->toBeString();

    //testando tambem se a string que veio foi "Olá mundo"

    expect($result)->toEqual("Olá mundo");




    
    
});




