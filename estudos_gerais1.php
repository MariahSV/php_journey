<!-- 
LENDO DO PC: http://localhost/......
LENDO DO LAPTOP: http://localhost/php_journey/estudos_gerais1.php 
-->

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
        //declare(strict_types=1); diz ao php que todas as vars com tipo declarado devem ser estritamente tratados de acordo.
        //caso uma ação receba uma variável de tipo diferente, o php retornará erro por exceção.

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
        /* parâmetros por referência: quando você quer que duas ou mais variáveis mencionem o mesmo conteúdo na memória, 
        elas devem ser declaradas da seguinte forma: $a = 123; $b =&a;  a partir daí, toda vez que $a for editada, a var $b será atualizada.
        Se for somente $b = $a, o conteúdo será atribuído a $b uma única vez e não seria atualizada caso $a fosse modificada.
        O mesmo ocorre quando se quer editar uma variável de escopo global dentro de uma função: $a=.. function func(&$arg){ ações com $arg}   func($a)
        OU inversamente com variáveis locais: function &func(){ $a ... return $a; }    $valor = &func();
        */

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
        $a_qtd = count($a); //OU com arrays inteiros: count( [1,2,3] ), count( range(0,1000) )
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

        echo "<br>- Arrays associativos:";
        $anoAtual = 2022;
        $idadesPets = ["pichu"=>($anoAtual-2019), "flicka"=>($anoAtual-2007), "haku"=>($anoAtual-2006), "lau"=>($anoAtual-2017+4), "axel"=>($anoAtual-2012), "lelo"=>($anoAtual-2005)];//Chave ou índice virou uma string, e o valor associado é concedigo e associado pelo símbolo =>
        echo "Pichu: ".$idadesPets[pichu].", Flicka: ".$idadesPets[flicka].", Haku;".$idadesPets[haku]."Lau: ".$idadesPets[lau]."; Lelo: ".$idadesPets[lelo]."; Axel: ".$idadePets[axel];

        //Shift+Alt+Insert>> múltipla edição de linhas se estas estiverem alinhadas verticalmente

        echo "<br>- Arrays multidimensionais:";
        echo "<br>Formato 1: usando `array()` e sem declaracao de indice";
        $jogo = array(
            array(1, "Zé", 11),
            array(2, "José", 4),
            array(3, "Zeca", 22)
        );
        echo "<br>Array completo: ".print_r($jogo);
        echo "<br>Chamando um elemento isoladamente: ".$jogo[2][3]; //formato: $nomeArray[linha][coluna]
        echo "<br>Formato 2: usando colchetes somente";
        $jogo2 = [
            ["ID"=>1, "NOME"=>"Zé",    "PONTOS"=>11],
            ["ID"=>2, "NOME"=>"José",  "PONTOS"=>4],
            ["ID"=>3, "NOME"=>"Zeca",  "PONTOS"=>22]
        ];
        echo "<br>Chamando um elemento isoladamente: ".$jogo2[3]["NOME"]; //formato: $nomeArray[linha][coluna]
        echo "<br>Alterando valores: pontos atuais de Zé=".$jogo2[1][3]."; pontos+2=".$jogo2[1][3]+=2;
        echo "<br>Função IS_ARRAY(): função booleana de verificação de tipo array (retorna 1 se verdadeiro, 0 se falso).";
        echo "<br>- Verificando a estrutura '[]': ".is_array( [] );
        echo "<br>- Verificando a estrutura 'array()': ".is_array( array() );
        echo "<br>- Verificando a estrutura [1,2,3]: ".is_array( [1,2,3] );
        echo "<br>- Verificando a estrutura '123': ".is_array( 123 ); 
        //talvez seja interessante converter o resultado usando variável com if else embutido
        echo "<br>Função IN_ARRAY(): verifica se elemento está dentro do array."; //in_array(valor, array)
        echo "<br>- Verificando se há no. 2 em range(1,30): ".in_array(2, range(1, 30));
        echo "<br>- Verificando se há no. 15 em range(1,30): ".in_array(15, range(1, 30));
        echo "<br>- Verificando se há no. 31 em range(1,30): ".in_array(31, range(1, 30));
        echo "<br>Ordenando elementos: funções SORT() e ARRAY_REVERSE()";
        $desordenado = ["a", "x", "b", "y", "c", "z"]; //precisa ser declarado à parte da função SORT()
        $ordenado = sort($desordenado);
        $invertido = $ordenado;
        echo "<br>Ordenando a sequência a,x,b,y,c,z: ";
        print_r($ordenado);
        echo "<br>Invertendo a sequência anterior: ";
        print_r($invertido);
        $somandotudo = [1, 2, 3, 4];
        echo "<br>Somando todos os números em um array numérico com 1, 2, 3 e 4 com ARRAY_SUM(): ".array_sum($somandotudo);
        $grupo1 = ["a", "b", "c"];
        $grupo2 = [1, 2, 3];
        $grupototal = array_merge($grupo1, $grupo2);
        echo "<br>Juntando dois arrays com ARRAY_MERGE(): ";
        print_r($grupototal);

        echo "<br><br>Explorando funções: "; //função != método, função retorna valores, método não
        function minhaPrimeiraFunc($parametro1, $parametro2, $parametrox){ 
            echo "<br>- Função chamada com sucesso!"; 
            echo "<br>- Definidos no cabeçalho da função temos os parâmetros, ao chamar a função com valores são chamados de 'argumentos'.";
            echo "<br>- Foram eles: parâmetro 1: ".$parametro1.", parâmetro 2: ".$parametro2.", parâmetro x: ".$parametrox.". Pode-se adicionar quantos parâmetros quiser.";
        } //declarando a função; deve respeitar as mesmas regras de criação de variáveis
        minhaPrimeiraFunc("argumento1", "argumento2", 12345); //chamando a função; todos os valores envolvidos desaparecem do sistema após seu processamento
        echo "<br>Função com valores default, ou seja, pré determinados: ";
        function segundaFunc($param1 = "default 1", $param2 = "default 2"){ 
            echo "<br>- Leia o código e veja a diferença ao definir um argumento ou não ao chamar a função: ".$param1.", ".$param2; 
        }
        segundaFunc();
        segundaFunc("abc", 123);
        
        //Funções com mais de 1 argumento não definidos previamente: function nome(){ códigos }
        //func_get_arg(índice): acessa um argumento específico, como se a lista de argumentos fosse um array;
        //func_get_args(): retorna um array com os argumentos passados;
        //func_num_args(): retorna a quantidade de argumentos passados;
        //na prática: $soma = func_get_arg(0) + func_get_arg(1); dentro da função, pegaria somente os 2 primeiros argumentos enviados se estes existissem.

        echo "<br> Explorando função sem argumentos definidos (funções variádicas): ";
        function somaTudo(){
            $numeros = func_get_args(); //recebe argumentos como array
            $total = 0;
            foreach($numeros as $item){
                $total += $item;
            }
            echo "somando tudo em ";
            print_r($numeros);
            echo " = ".$total."; ";
        }
        somaTudo(1,2);
        somaTudo(3,4,5,6);
        function mediaAritmetica(...$valores){ //poderia atribuir parâmetros específicos como $a e $b e demais transformar em array usando a notação ...$nome, que nunca deve vir no início
            $total = array_sum($valores) / count($valores);
            return $total;
        }
        echo "<br>Função de média aritmética: teste com 1,2,3: ".mediaAritmetica(1,2,3)."; teste com 4,5,6,7,8,9: ".mediaAritmetica(4,5,6,7,8,9);
        
        /* Escopo/contexto de variáveis
        - toda variável fora de uma função é de escopo global
        - toda variável dentro de uma função é de escopo local
        - uma var global pode ser usada dentro de uma função se for chamada usando a função GLOBAL: global $nomeVar; na forma específica
        ou $GLOBALS["nomeVar"]; na forma de biblioteca global, ela irá procurar pela var de nome 'nomeVar', sem o $.
        - uma var global pode ser chamada por referência na memória atribuindo o caractere & antes: &$var; tornando-se editável, e não só tendo seus valores copiados
        - em uma função também pode-se puxar variáveis com a seguinte nomenclatura: function func() use (&$var1, $var2){ ações com $var1 e $var2}; lembrando da diferença de uso ou não de & pra referência
        */

        /** Tipagem em funções:
         * function func(tipo $var) : tipo { ações }
         * Junto da variável de argumento define-se o tipo dessa variável, 
         * e após a criação da função define-se o tipo do contéudo retornado após a conclusão de suas ações.
        */

        /**Operador null coalescing: ??
         * Similar ao operador ternário;
         * usado para verificar se existe um valor, se não, permite adição de outro como padrão, e funciona como concatenador.
         * $ddd = $_GET['ddd'] ?? "00";
         * $telefone = $_GET['telefone'] ?? $_GET['celular'] ?? "0000-0000"; >> SE houver valores na chave telefone, aceite.. SENÃO, se houver na chave tel..... SENÃO, use o default definido
         * echo "Tel: ($ddd) $telefone";
         */

        /**Operador Spaceshift: <=>
         * Usado para comparar dois valores como menor (retorna -1), igual (0) ou maior (1)
         * mesmo com arrays com números iguais, ele compara cada número isoladamente, ou seja [1,2,3] < [1,2,4]
         * ao se comparar caracteres, ele traduz antes para um número na ordem alfabética e depois compara, ou seja "e" < "m"
         */

        /**Importando outros códigos PHP de arquivos externos:
         * include('arquivo.php'); >> caso o arquivo não exista, o processamento do código continua
         * require('arquivo.php'); >>  caso o arquivo não exista, o processamento do código para e exibe msg de erro
         * 
         * include_once e require_once funcionam como seus respectivos antecessores, mas o _once apenas lê o arquivo se já não tiver sido lido anteriormente.
         * Em caso de serem chamados mais de uma vez num mesmo código, include e require resetam as variáveis dos arquivos, enquanto o _once continua o processamento normalmente 
         * e ainda pode atualizar variáveis.
        */

        /**Funções anônimas
         * Se comportam como funções MAS
         * - não possuem nome declarado
         * - devem ser definidas como uma variável
         * $var = function($arg){ ações };   << ; importante neste caso
         * Invocadas como: $var("arg"); >> ativa a função anônima com o parâmetro definido
         * ou funcrandom($var); >> sendo funcrandom($a) {$a("arg")} >> funcrandom($var){$var("arg")} 
         * >> ou seja, ativação da função anônima com o argumento "arg"
         * 
         * Na prática:
         * $quadrado = function($item){ return $item * $item; }; função anônima recebe item e o retorna ao quadrado
         * $cubo = function($item)use($quadrado){ return $quadrado($item) * $item }; recebe item e função de quadrado, e transforma em cubo
         * 
         * function processa_lista($lista, $func){ recebe os parâmetros lista e função anônima
         *      foreach($lista as &$item) { para cada item original da lista...
         *          $item = $func($item); ... o item será atualizado de acordo com as operações da função anônima escolhida
         *      }
         *      return $lista; imprime na tela o conteúdo atualizado da lista
         * }
         * print_r(processa_lista(range(1,10), $quadrado)); imprime o resultado do pocessamento da lista de 1 a 10, e executa as respectivas funções
         * print_r(processa_lista(range(1,10), $cubo));
         */

         /** ARRAY_MAP(func anonima, array): realiza uma função com base um array
          * ARRAY_FILTER(array, func anonima): realiza uma função com uma condicional para selecionar elementos de um array; param < 4 por ex.
          */
        
        /** STRINGS
         * - seriam arrays de caracteres
         * - há diferença de uso entre " e ' (strings primitiva, tudo vira caractere, não confere se há funções dentro da frase) na declaração de valores de variáveis. 
         * - acessando elementos individuais: $var[i] ou $var{i}
         * - quantidade de caracteres: strlen($var) ou strlen('textão')
         * - retorna trecho de string: substr($string, índice de início, quantidade de caracteres)
         * - uppercase: strtoupper($string)
         * - lowcase: strtolower($string)
         * - substituindo: str_replace('caracteres a mudar', 'novos caracteres', $var onde estão os caracteres)
         * - para caracteres especiais problemáticos, usar abrra de escape antes (barra invertida): (bi)' 
         * - concatenar = juntar "exemplo".$num
         * - interpolar = "inception" de conteúdo: "exemplo $num"; ${$a} para variáveis-variáveis
         * - **** um array que vira uma var-var deve ser declarado como ${$arr[2]} pois dá erro ao mudar a tipagem do array para uma string por ex.
         * - HEREDOC (equivalente a "", permite interpolação) e NOWDOC (equiv. a '' não permite interpolação) são formas alternativas de declarar variáveis strings LONGAS
         * - HEREDOC: $var = <<<NOME  textão com html NOME; (final NOME; deve estar sem espaçamento na margem!!)
         * - NOWDOC: $var = <<<'NOME' textão com qualquer caractere, até um código cru que não será lido, somente impresso NOME; (final deve estar colado com margem como o anterior)
         * - SOMENTE USAR FUNÇÕES DO PHP PARA MANIPULAR STRINGS, a não ser que não haja nada do que se necessita, para evitar bugs e otimizar processamento
         */

        /** Métodos de requisição WEB
         * POST: dados trafegam no cabeçalho da requisição, ou seja, internamente ao arquivo de código; 
         * GET: dados trafegam junto a URL, ou seja, ficam expostos na barra de endereço; 
         * - endereço?parâmetros&param2&param3...
         * - posso puxar no código e imprimir na tela os parâmetros jogados na URL com a variável global $_GET['nomechave']
         */

        echo "<br><br><h3>Explorando CLASSES:</h3>"; 
        /*CLASSE: como o objeto e construido; OBJETO ou INSTANCIA: como e executado
        Nomenclatura nao e caso sensitiva; convencional usar primeira letra maiuscula de cada palavra
        Classes funcionam como blocos de formularios e objetos como cadastros isolados
        */
        class Teste { //criando classe
            //variaveis de classe devem ser declaradas de forma diferente
            //public: item acessivel externamente a classe
            //private: item restrito a classe em que foi criado
            //protected: item somente acessivel por subclasses
            public $nome = "Dummy";
            public $idade = 0;
            //var $teste; funciona como PUBLIC mas em codigos antigos
            function __construct(){ //uso automatico do php mas da pra personalizar
                /*Ativado pelo comando NEW.
                * ao criar uma nova instancia com a classe o comando NEW ativa o construtor, aqui podem ser definidos parametros de entrada e 
                * associar com os atributos internos da classe ao inves de digitar as linhas de associacao de conteudos novos externamente como abaixo.
                exemplo de conteudo para o construtor:  function __construct($nome, $idade){
                    $this->nome = $nome;
                    $this->idade = $idade; 
                }
                ao criar entao deve ser digitado: $objeto1= new NomeClasse("um nome", 20);
                pois foi definido que o construtor DEVE receber obrigatoriamente essas informacoes.
                basicamente esta funcao ja existe no php, o que estamos fazendo seria somente personalizar sua acao.
                um comando de construcao NEW nao pode ser usado dentro da classe-fora do construtor, apenas dentro do construtor ou funcao.
                
                Funções modificadores são funções que definem ou coletam informações de variáveis definidas como privadas; algo como manejo de informação de forma segura para evitar erros.
                */
            } 
            function __destruct(){
                //funcao do php ativada ao usar o comando UNSET
                //assim como o CONSTRUCT, pode-se personalizar o que sera feito antes da instancia da classe ser de fato deletada
            }

            public function mostrar_idade(){
                return $this->idade;
            }
            public function definir_idade($local){
                if($local > 0) {
                    $this->idade=$local;
                } else {
                    echo "A idade informada nao e valida."
                }
                //$this -> atributo   pseudo var que chama atributos e funcoes dentro da propria classe. nao usado fora de uma classe.
            }
        }
        $objetoA = new Teste(); // criando objetos; essencial associar com uma variavel pois o php deleta instancias criadas mas nao associadas.
        //a nova instancia pode ser criada sem parenteses caso o construtor nao possua parametros definidos.
        //var_dump($objetoA); //lendo conteudo
        $objetoA -> nome = "Maria"; //modificando valores de atributos de objetos especificados
        $objetoA -> idade = 20;
        echo $objetoA -> idade; //mostrando valores
        $objetoA -> definir_idade(4); //chamando funcao dentro da classe
        echo "A idade e: {$objetoA->mostrar_idade()}"; //deve usar chaves
        $objetoA -> definir_idade(-5);
        echo "A idade e: {$objetoA->mostrar_idade()}";
        unset($objetoA); //deletando objetos
        /* SUBCLASSES ou CLASSES FILHAS ou LIDANDO COM HERANCAS ou DERIVADAS
        * class SubClasse extends Classe {}
        * acessa todo o conteudo nao privado da classe pai/ super classe.
        * CASO ESPECIAL DE CONFLITO DE INFORMACOES: variaveis de mesmo nome
        tanto na sub quanto na superclasse sao tratadas como um endereco apenas.
        Funções de mesmo nome na subclasse serão utilizadas no lugar das funções da superclasse como uma sobrescrita.
        demais itens de programacao de mesmo nome vao gerar conflito de processamento.
        */
        
        //echo "<br>";

        



        //MODELINHO echo "<br><br><h3>Explorando :</h3>";
        //echo "<br>";
        
        /* Até aqui, o código ainda é PHP. Após a tag de fechamento, o código volta a ser lido como HTML/CSS */
        /* Em arquivos com PHP cru, pode ser usada somente a tag de abertura, sem a tag de fechamento. */
    ?>

</body>
</html>

<?php
