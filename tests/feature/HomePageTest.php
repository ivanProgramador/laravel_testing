<?php

test('verificar se a welcome page esta disponivel', function () {
    
    $response = $this->get('/');

    $response->assertStatus(200);
});
