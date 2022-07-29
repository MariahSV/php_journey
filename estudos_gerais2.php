<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Exemplo 2 PHP</title>
</head>
<body>
    <h1>Testando PHP</h1>
    <h2>Exemplo 2</h2>
    <p>Testanto formulários</p>
    <p>Antes do form, sendo o arquivo executado pela primeira vez, qualquer código PHP inserido que requira variável não declarada ou vazia sem confirmação de conteúdo dará sinal de erro.</p>

<!-- MODELINHO -->
<h3>Modelinho inicial</h3>
<?php 
    if(isset ($_POST["campo1"])) { //confirma se há valores dentro do campo definido, cancela a mensagem de erro mencionada anteriormente
        echo $_POST["campo1"] . "<br>";
    }
?>   
<form method="POST">
        <input type="text" name="campo1" />
        <input type="submit" />
</form>


<!-- PAR ÍMPAR -->
<h3>Par X Ímpar</h3>
<?php 
    if(isset ($_POST["campo_numero"])) {
        echo $_POST["campo_numero"] . "<br>";
        $var_numero = $_POST["campo_numero"]; //a var recebe o conteúdo do campo numero
        
        if ($var_numero % 2 == 0){ //se resto de divisão por 2 é 0..
            echo "O número dado é par.";
        } else {
            echo "O número dado é ímpar.";
        }
    }
?>   
<form method="POST">
        <input type="text" name="campo_numero" />
        <input type="submit" />
</form>

<!-- LOGIN E SENHA -->
<h3>Login e Senha simples</h3>
<?php 
    $login = "teste";
    $senha = "321";
    
    if(isset ($_POST["campo_login"])) { 
        echo $_POST["campo_login"] . "<br>";
        echo $_POST["campo_senha"] . "<br>";

        if(($_POST["campo_login"] == $login) && ($_POST["campo_senha"] == $senha)){
            echo "Login efetuado com sucesso.";
        } else {
            echo "Login e/ou senha incorretos.";
        }
    }
?>   
<form method="POST">
        <input type="text" name="campo_login" /><br><br>
        <input type="password" name="campo_senha" />
        <input type="submit" />
</form>
<p>Definidos dentro do código como "teste" e "321". Tente escrever algo diferente nos campos.</p>

<!-- TABELA DINÂMICA -->
<h3>Tabela Dinâmica</h3>
<?php 
    if(isset ($_POST["dependentes"])) { 
       $dependentes = $_POST["dependentes"];
        if(!is_numeric($dependentes)){ //confere se não é um número
            $dependentes = 1; //atribui por padrão o valor à variável
            echo "Valor inserido não é um número. Digite um número para criar mais campos na tabela.";
        }

    $cont = 0;

    //Parte de conteúdo "fixa"
    echo "<table border='1'>
        <tr>
            <th></th>
            <th>Nome</th>
            <th>Nascimento</th>
        </tr>  
    "; //ATENÇÃO!!!!!!! toda aspas dupla de html dentro de um Echo de PHP deve ser substituída para aspas simples!!!!!!!!!

    //Parte de conteúdo dinâmica
       do {
            $cont = ($cont + 1);
            echo "  <tr>
                        <td>Dependente $cont</td>
                        <td><input type='text' name='nome'></td>
                        <td><input type='text' name='nascimento'></td>
                    </tr>
            ";
       } while ($cont < $dependentes);
       
       echo "</table>"; //Se add dentro do loop, a tabela fecha antes de add novas linhas.
    }
?>
   
<br>
<form method="POST">
    <input type="text" name="dependentes">
    <input type="submit">
</form>

<!-- OPERAÇÃO TERNÁRIA COM GET -->
<h3>Operação Ternária com GET</h3>
<p>Para este exemplo, escreva no navegador logo após o endereço URL já existente o conteúdo abaixo e pressione Enter.</p>
<p>?texto=Texto à escolha logo após o sinal de "=".</p>
<br>
<?php 
$txt = isset($_GET["texto"]) ? $_GET["texto"] : "A chave não existe.";
echo $txt;
?>

<!-- SWITCH -->
<h3>Comando SWITCH</h3>

<?php 
if(isset($_POST["meses"])){
    $mes = $_POST["meses"];
    switch ($mes) {
        case 1:
            echo "Janeiro";
            break;
        case 2:
            echo "Fevereiro";
            break;
        case 3:
            echo "Março";
            break;
        case 4:
            echo "Abril";
            break;
        case 5:
            echo "Maio";
            break;
        case 6:
            echo "Junho";
            break;
        case 7:
            echo "Julho";
            break;
        case 8:
            echo "Agosto";
            break;
        case 9:
            echo "Setembro";
            break;
        case 10:
            echo "Outubro";
            break;
        case 11:
            echo "Novembro";
            break;
        case 12:
            echo "Dezembro";
            break;
        // nesse caso não é necessário colocar opção default:, que por sua vez não necessita de comando break
    }
}


?>

<form method="post">
    <select name="meses">
        <option value="1">Janeiro</option>
        <option value="2">Fevereiro</option>
        <option value="3">Março</option>
        <option value="4">Abril</option>
        <option value="5">Maio</option>
        <option value="6">Junho</option>
        <option value="7">Julho</option>
        <option value="8">Agosto</option>
        <option value="9">Setembro</option>
        <option value="10">Outubro</option>
        <option value="11">Novembro</option>
        <option value="12">Dezembro</option>
    </select>
</form>

<!-- FORMULARIOS -->
<h3>FORMULARIOS</h3>
<p> Todo formulário se comporta como um array sendo cada campo uma chave e cada conteúdo o valor dessa chave.
    <br>A única diferença entre métodos GET e POST são a exposição dos dados ao enviar o formulário.
    <br>Método GET expõe na URL, enquanto o método POST encriptografa as informações.
</p>
<br>
<form action="metodo_get.php" method="GET"> <!-- Todo form precisa das tags, uma acao e um metodo de envio -->
    <fieldset> <!-- define um conjunto de campos -->
        <legend>Formulário de método GET</legend>
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
        </p>
        <p>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email">
        </p>
    </fieldset>
    <p>
        <input type="submit" value="Enviar" id="enviar">
    </p>
</form>

<p>Lendo a URL após clicar no botão: 
    <br>- metodo_get.php: arquivo acionado;
    <br>- ? : parâmetros colhidos anteriormente pelo formulário começam a partir daqui;
    <br>- nome= (texto digitado) : nome da chave e seu valor atribuído no campo;
    <br>- & : divisão de atributo;
    <br>- email (texto digitado): nome da chave e seu valor atribuído.
</p>


<form action="metodo_post.php" method="POST"> <!-- Todo form precisa das tags, uma acao e um metodo de envio -->
    <fieldset> <!-- define um conjunto de campos -->
        <legend>Formulário de método POST</legend>
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
        </p>
        <p>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email">
        </p>
    </fieldset>
    <p>
        <input type="submit" value="Enviar" id="enviar">
    </p>
</form>

<?php ?>

<!--
https://jornadadodev.com.br/cursos/curso-completo-de-php/aula-89-variaveis-superglobais?ref=playlist
-->





<!-- COLINHA -->
<!-- SWITCH 
<h3>Comando SWITCH</h3>
<?php ?>
-->

</body>
</html>