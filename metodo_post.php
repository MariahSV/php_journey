<?php

// var_dump($_POST); 
//^^ imprime variáveis vindas do método POST

//O processo de chamada do método POST é igual ao método GET

if(count($_POST)) { 
    echo 'Nome: '. ($_POST['nome'] ?? '') . 
        '<br>Email: '. ($_POST['email'] ?? ''); 
}