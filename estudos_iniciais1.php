<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/> <!-- Definição de leitor de caracteres -->
    <title>Exemplo 1 PHP</title>
</head>
<body>
    <h1>Testando PHP</h1>
    <h2>Exemplo 1</h2>
    <p>Primeiramente, é necessário que haja algum conteúdo estrutural de HTML para que o PHP atue. O arquivo deve ser salvo com extensão ".php".</p>
    <p>Entre as instalações necessárias, precisei baixar um servidor local (Apache), um banco de dados (MySQL), e um leitor de PHP, tudo isso para simular o site num servidor online. Para estes estudos estou usando o pacote XAMPP.</p>
    <p>Para fazer ser lida a parte em PHP, é necessário que este arquivo esteja dentro da pasta de arquivos locais do Servidor Local Host. No caso do XAMPP é a pasta htdocs. Além disso devo acessar cada arquivo de teste pelo browser, não pelo explorador de arquivos digitando: localhost/pasta/arquivo.php. Localhost ainda pode ser um número como 127.0.0.1</p>
    <p>Dependendo do editor de código, algumas configurações extras devem ser feitas, mas é fácil de achar no google.</p>
    <p>Declarações de variáveis, uso do comando Echo e concatenações:</p>
    



    <?php /* Esta é uma supertag que inclui códigos PHP dentro do HTML */
        echo "<p> Xazam karai! Meu primeiro textinho! </p>
                <h5>Entre as aspas do comando echo ainda posso colocar HTML!</h5>"; //Imprime textos na tela

        echo "<br><br><h3>Explorando VARIÁVEIS:</h3>";
        $variavelinteiro = 3; //var declara-se com $ antes.
        $variavelreal = 6.141617; //vars são caso sensitivas.
        $variaveltexto = 'texto'; //devem estar entre aspas simples!
        $variavelbool = false; //ou true
        /* Tem como forçar a atribuição de tipos de variáveis:
        Inteiro: (int), (integer)
        Real: (real), (float), (double)
        Caractere: (string)
        Lógico, Booleana: não há.
        Ficaria: $var = (tipo) valor;    $variavelreal = (real) 6.141617;
        
        Outros tipos:
        array: recebe múltiplos valores, tipo uma tabela
        objects: usado em funções
        resource: qualquer outro tipo de informação além dos tipos anteriores como imagens.

        PODE: $nome, $_nome, $nome1
        NÃO PODE: $1nome, $ nome, uso de * / ' " ! @ # $ % ¨ &, uso de termos da própria linguagem
        */
        
        // Uma linha isolada de comentário
        #Outra linha isolada de comentário;
        /* Múltiplas 
        linhas
        de
        comentário */

        echo $variavelinteiro."<br>"; // \n quebra linhas no arquivo fonte e no html, deve ser expresso entre aspas duplas e na forma de concatenação.
        echo $variavelreal."<br>";
        echo $variaveltexto."<br>";
        echo $variavelbool."<br>";
        echo "Exemplo de concatenação 1: usando pontos, " . $variavelbool . " texto qualquer " . $variavelreal . "<br>";
        echo "Exemplo de concatenação 2: tudo dentro de aspas duplas, $variavelinteiro, $variavelreal, texto qualquer. <br>"; // \n pode ser inserido dentro de outro texto entre as mesmas aspas.
        echo 'Exemplo de concatenação falha: só porque usei aspas simples ao invés de aspas duplas... $variavelbool, $variavelreal <br>';
        print ("Frase impressa por função Print. Dizem ser mais lenta que o comando Echo, mas é irrelevante a diferença de tempo. A única real diferença é o retorno de valores ao sistema, que o Echo não realiza. Mas novamente, é irrelevante. <br>");
        echo gettype($variavelbool) . " << Comando de leitura de tipo de variável. <br>";
        //var_dump(valor1 operador valor2); <<retorna na tela o tipo de operação e seu resultado entre dois valores ou operandos.

        //CONSTANTES: o próprio código não permite que os valores sejam modificados como ocorre com variáveis.
        echo "<br><br><h3>Explorando CONSTANTES:</h3>
            <br>Usando DEFINE 'fixo':
        ";
        define("NOMECONSTDEF", 20); //20 é o valor; PERMITE NOMES PERFORMÁTICOS, DINÂMICOS; não recebe $, por convenção usa-se somente letras maiúsculas, além das regras de caracteres de variáveis.
            echo NOMECONSTDEF;
            echo "<br>Usando DEFINE com FOR (x de 0 à 5):";
        for ($x=0; $x<5; $x++)
            define("CONSTANTE".$x, $x);//nome recebe número ao final, e novas constantes recebem o mesmo número como valor. 
        
        echo CONSTANTE0.", ".CONSTANTE1.", ".CONSTANTE2.", ".CONSTANTE3.", ".CONSTANTE4."; Como a CONSTANTE5 não foi gerada, aparece um erro na tela. "; //não aceita escrita: CONSTANTE.$x, somente CONSTANTE e um número, como foram criadas anteriormente.
        const NOMECONST = 15; //não é performático.
        echo "<br>Usando CONST: ".NOMECONST;

        echo "<br><br><h3>Explorando VARIÁVEIS VARIÁVEIS: </h3>"; //recebem
        $varvar = "NomeVar"; //define "pré nome" da variável variável
        $$varvar = "Valor"; //define o valor da variável
        echo "Conteúdo da variável normal: ".$varvar."; Conteúdo da variável variável: ".$$varvar."; Chamando variável variável pelo seu novo nome: $NomeVar";
        echo "<br>Ou seja, posso agora chamar o conteúdo da variável variável tanto por $$'varvar quanto por $'NomeVar ";


        //MATEMÁTICA
        $num1 = 2;
        $num2 = 3;
        $num3 = 4;
        $num4 = 0.2;
        $num5 = $num6 = $num7 = $num8 = $num9 = 1;
        $soma = $num1+$num2;
        $subtracao = $num3-$num2;
        $multiplicacao = $num1*$num2;
        $divisao = $num3/$num2;
        $restodiv1 = $num3%$num2;
        $restodiv2 = fmod($num3, $num4);
        
        echo "<br><br><h3> Explorando operadores matemáticos:</h3>
            <br> Números sendo usados: $num1, $num2, $num3, $num4
            <br> Soma: $num1+$num2=$soma
            <br> Subtração: $num3-$num2=$subtracao
            <br> Multiplicação: $num1*$num2=$multiplicacao
            <br> Divisão: $num3/$num2=$divisao
            <br> Resto: $num3%$num2=$restodiv1
            <br> Resto com números Float na operação: $num3%$num4=$restodiv2; (acho que não rolou mas..) caso especial de retorno de valores pois o PHP ignora números float na operação de Resto; aqui foi usada a função fmod().
            <br><br> Explorando operações compostas: operações que usam a variável da esquerda com operações na direita, e atribuem o resultado à variável da esquerda no final.
            <br> Soma-igual: $num5+=$num1=".($num5+=$num1).
            "<br> Subtração-igual: $num6-=$num1=".($num6-=$num1).
            "<br> Multiplicação-igual: $num7*=$num1=".($num7*=$num1).
            "<br> Divisão-igual: $num8/=$num1=".($num8/=$num1).
            "<br> Resto-igual: $num9%=$num1=".($num9%=$num1)
        ;
        
        echo "<br><br><h3> Explorando incrementos e decrementos:</h3>";
            $cont=0;
            echo "<br>Contador definido como: $cont.";
            echo "<br>Pré incremento: ++cont = " . ++$cont . "; como pode ver, adiciona 1 antes de ser impressa na tela.";
            $cont=0;
            echo "<br>Pós incremento: cont++ = " . $cont++ . "; como pode ver, parece que não foi adicionado nada mas...";
            echo "<br>Após a finalização do comando Echo anterior, a computação do contador foi efetuada: $cont";
            $cont=0;
            echo "<br>O mesmo ocorre com decrementos:";
            echo "<br>Pré dencremento: --cont = " . --$cont;
            $cont=0;
            echo "<br>Pós decremento: cont-- = " . $cont-- . "; Relendo contador: $cont";
            

        //IF, ELSE, ELSE IF = apenas utilizam resultados booleanos para tomada de decisão.
        $fulaninho = 10;
        $maioridade_fulaninnho;
        $siclaninho = 19;
        $maioridade_siclaninho;
        
        echo "<br><br><h3> Explorando IF/ELSE simples:</h3>
        <br> Fulaninho tem $fulaninho anos e Siclaninho tem $siclaninho anos. Nas condicionais abaixo o sistema dirá se são maiores ou menores de idade.
        ";
        
        if ($fulaninho < 18){
            $maioridade_fulaninnho = "menor de idade";
        } else {
            $maioridade_fulaninnho = "maior de idade";
        }

        if ($siclaninho < 18){
            $maioridade_siclaninho = "menor de idade";
        } else {
            $maioridade_siclaninho = "maior de idade";
        }
        echo "<br> Fulaninho é $maioridade_fulaninnho; enquanto Siclaninho é $maioridade_siclaninho.";
        
        
        $idade = 61;
        echo "<br><br><h3> Explorando IF/ELSE/ELSEIF:</h3>
        <br> A pessoa tem $idade anos. A condicional abaixo dirá em qual faixa etária ela se encontra (menor de idade -18, adulto 18-59, idoso 60+).
        ";
        if ($idade < 18) {
            echo "<br> A pessoa é menor de idade.<br><br>";
        } elseif ($idade >= 18 and $idade < 60) {
            echo "<br> A pessoa é adulta.<br><br>";
        } else {
            echo "<br> A pessoa é idosa.<br><br>";
        }
        
        echo "<br> (Não sei porque, mas o processamento da função var_dump() não aparece onde deveria...)<br>";

        echo "<br><br><h3> Explorando operadores relacionais usando função var_dump():</h3>
            <br> Números sendo usados: $num1, $num2
            <br> Igualdade: $num1 == $num2 = ".var_dump($num1 == $num2).
            "<br> Diferença: $num1 != $num2 = " . var_dump($num1 != $num2) .
            "<br> Igualdade com Negação: !$num1 == $num2 =  " . var_dump(!$num1 == $num2) .
            "<br> Idêntico (compara tipos e conteúdos): $num1 === string 2 =  " . var_dump($num1 === "2") .
            "<br> Não idêntico (compara tipos e conteúdos): $num1 !== string 2 =  " . var_dump($num1 !== "2") .
            "<br> Menor: $num1 < $num2 = " . var_dump($num1 < $num2) .
            "<br> Maior: $num1 > $num2 = " . var_dump($num1 > $num2) .
            "<br> Menor ou Igual: $num1 <= $num2 = " . var_dump($num1 <= $num2) .
            "<br> Maior ou Igual: $num1 >= $num2 = " . var_dump($num1 >= $num2)
        ;

        echo "<br><br><h3> Explorando WHILE: </h3>";
        $cont = 0;
        while ($cont < 3) {
            echo "<br> Contador em $cont, deve parar em 3. Contador aumenta APÓS impressão do texto.";
            $cont = ($cont + 1);
        }
        $cont = 0;
        while ($cont < 3) {
            $cont = ($cont + 1);
            echo "<br> Contador em $cont, deve parar em 3. Contador aumenta ANTES da impressão do texto.";
        }

        echo "<br><br><h3> Explorando DO WHILE: </h3>";
        $cont = 0;
        do {
            echo "<br> Contador em $cont, deve parar em 3. Contador aumenta APÓS impressão do texto.";
            $cont = ($cont + 1);
        } while ($cont < 3);
        $cont = 0;
        do {
            $cont = ($cont + 1);
            echo "<br> Contador em $cont, deve parar em 3. Contador aumenta ANTES da impressão do do texto.";
        } while ($cont < 3);

        echo "<br><br><h3> Explorando FOR: </h3>";

        for($i=0; $i<3; $i++){
            echo "<br> Contador em $i, deve parar em 3. Contador aumenta APÓS impressão do do texto."; 
        }

        /* BREAK
        while.. {
            .. <<executado
            if (..){
                break;
            } <<para processamento
            ..<<só lido se condição acima permitir continuar
        }*/
        echo "<br><br><h3> Explorando BREAK: </h3>";
        for($i=0; $i<11; $i++){
            echo "<br> Contador em $i, pelo cabeçalho do código ele deve parar em 11, mas o break fará parar no 5."; 
            if($i == 5){
                break;
            }
            echo "<br>Esta linha aparece enquanto o contador for menor que 5.";
        }
        
        /* CONTINUE
        while.. {
            .. <<executado
            if (..){
                continue;
            } 
            .. <<só lido se condição acima permitir, do contrário o processamento RESETA.
        }
        */
        echo "<br><br><h3> Explorando CONTINUE: </h3>";
        for($i=0; $i<11; $i++){
            echo "<br> Contador em $i, pelo cabeçalho do código ele irá parar no 11, mas pulará a linha indicada abaixo em determinada situação."; 
            if($i == 5){
                continue;
            }
            echo "<br>Esta linha irá sumir quando o contador se tornar 5.";
        }


        /*echo "<br><br> Explorando OPERAÇÃO TERNÁRIA: 
                <br> Quando precisamos atribuir valores a uma variável de forma situacional."
            ; */
        //$var = (cond) ? valor1 : valor2; >> se condição verdadeira, valor1, senão valor 2

        echo "<br><br><h3>Explorando ARRAYS:</h3>";
        echo "<br>Formato de declarar 1: usando função ARRAY<br>";
        $a = array ("Item 1", "Item 2", "Item 3");
        print_r($a); //comando de impressão de arrays
        echo "<br>Formato de declarar 2: resumida e completa<br>";
        $b = ["Item 1", "Item 2", "Item 3"];
        print_r($b);
        echo "<br>Formato de declarar 3: unitária e automatizada<br>";
        $c[] = "Item 1";
        $c[] = "Item 2";
        $c[] = "Item 3";
        print_r($c);
        echo "<br>Formato de declarar 4: unitária e especificada<br>";
        $d[3] = "Item 1";
        $d[4] = "Item 2";
        $d[5] = "Item 3";
        print_r($d);
        echo "<br>Adicionando ou alterando elementos:"; //métodos aparentemente lógicos podem não funcionar, ex: $a = $a+[item] || $a += [item].
        echo "<br>- Se índice vazio, adiciona no fim da fila: ";
        $a[] = "Item 4"; 
        print_r($a);
        echo "<br>- Se especificado e se não houver, adiciona no índice escolhido: ";
        $a[5] = "Item 6"; 
        print_r($a);
        echo "<br>- Se especificado e já houver, modifica: ";
        $a[1] = "Item 2 modificado";  
        print_r($a);
        echo "<br>Excluindo elementos: índice 3 removido; ";
        unset($a[3]);
        print_r($a);
        echo "<br>Função RANGE: arrays criados por listas pré definidas do PHP como alfabeto, números, datas, etc. <br>";
        $e = range(1, 15);
        $f = range(50, 1, 5);
        $g = range("a", "z", 3);
        print_r($e);
        echo "<br>";
        print_r($f);
        echo "<br>";
        print_r($g);
        echo "<br>Quantificando e iterando: ";
        $a[0] = "Item 1";
        $a[1] = "Item 2";
        $a[2] = "Item 3";
        $a[3] = "Item 4";
        $a[4] = "Item 5";
        $a[5] = "Item 6";
        $a_qtd = count($a);
        echo "O array $'a tem $a_qtd elementos.";
        echo "<br>- Usando FOR:";
        for ($x=0; $x < $a_qtd; $x++){
            echo "<br>Elemento $x: ".$a[$x];
        }
       echo "<br> Não sei porque baralhos, mas há inversão de alguns elementos abaixo.";
       echo "<br>- Usando FOR EACH com array e item:";
       foreach ($a as $item){
            echo "<br>".$item; //assim cada item é diretamente trabalhado na forma de uma variável temporária.
        }
        echo "<br>- Usando FOR EACH com array, index e item:";
        foreach ($a as $index => $item){
            echo "<br>O elemento $index do array $'a contém o seguinte conteúdo: $item";
        }
        echo "<br>- Trabalhando com arrays sem mudar valores:";
        echo "<br>Array usado: ";
        print_r($e);
        echo "<br>Multiplicando por 10 cada elemento: ";
        foreach ($e as $index => $item){
            $item *= 10;
            echo $item.", ";
        }
        echo "<br>Mas repare que o array permanece intacto: ";
        print_r($e);
        echo "<br>- Trabalhando com arrays mudando valores:";
        echo "<br>Mesmo processo que o anterior: ";
        foreach ($e as $index => &$item){
            $item *= 10;
            echo $item.", ";
        }
        echo "<br>Agora repare que o array mudou: ";
        print_r($e);



        //MODELINHO echo "<br><br><h3>Explorando :</h3>";
        //echo "<br>";
        
        /* Até aqui, o código ainda é PHP. Após a tag de fechamento, o código volta a ser lido como HTML/CSS */
        /* Em arquivos com PHP cru, pode ser usada somente a tag de abertura, sem a tag de fechamento. */
    ?>

</body>
</html>

<?php
