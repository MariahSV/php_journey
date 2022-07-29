<?php

var_dump($_GET); //imprime variáveis vindas do método GET



/*verificação de variável, se é vazia ou não; não precisa da condição "> 0" 
pois automaticamente se faz essa avaliação neste caso.
*/
if(count($_GET)) { 
    echo 'Nome: '. ($_GET['nome'] ?? '') . 
        '<br>Email: '. ($_GET['email'] ?? ''); 
    //$_GET entre parênteses indica uma operação a ser processada antes da concatenação
    //coleta valor de chave nome, mas se não houver nada, deixar em branco mesmo.
}