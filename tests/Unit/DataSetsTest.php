<?php

describe('Tests com datasets', function () {
    
    //coleção de dados que seram testados dentro do mesmo teste
    $clientes = [
         ['joão',18],
         ['maria',25],
         ['pedro',30],
         ['ana',22],    
         ['lucas',28]  
    ];

    
    it('Testando se todos os clientes têm nome', function($name, $age) {
        
        //tesnado se o nome é string
        expect($name)->toBeString();

        //testando se o nome não é vazio
        expect($name)->not->toBe('');

    })->with($clientes);


    it('Testando se todos os clientes têm idade maior que 18', function($name, $age) {
        
        //testando se a idade é maior que 18
        expect($age)->toBeGreaterThanOrEqual(18);

    })->with($clientes);

    
        
    
});
