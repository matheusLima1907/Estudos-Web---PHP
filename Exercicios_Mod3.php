<?php
//impressao de textos-----------------------------------
//exercicio 1
echo("Olá, eu estou aprendendo PHP! <br/>");

//Variáveis---------------------------------------------
//Exercicio 1
$nome = "Matheus";

//Exercicio 2
$salario = 3.720;

//Operadores Matemáticos--------------------------------
//Exercicio 1
$resultado = 1200 + 450.78;
echo("$resultado<br/>");

//Exercicio 2
$soma = 87 + 45;
$x3 = $soma * 3;
echo("$x3<br/>");

//Exercicio 3
$sub = 1000 - 100;
$divid = $sub / 100;
echo("$divid <br/>");

//If,Else, ElseIf----------------------------------------
//Exercicio 1
$nome_user = "Matheus";
$idd_user = 15;

if($idd_user <= 18){
    echo("Olá, $nome_user, você não pode participar do projeto <br/>");
}
else
    echo("“Olá, $nome_user, você pode participar do projeto<br/>");

//Exercicio 2
$salarioFunc = 1800;
$reajuste;

if ($salarioFunc <= 1200){
    $reajuste = $salarioFunc + 300;
    echo("Seu novo salário é: R$$reajuste,00 <br/>");
}
else{
    if($salarioFunc > 1200 && $salarioFunc <= 1600){
       $reajuste = $salarioFunc + 250;
       echo("Seu novo salário é: R$$reajuste,00 <br/>");
    }
    else{
        $reajuste = $salarioFunc + 200;
        echo("Seu novo salário é: R$$reajuste,00 <br/>");
    }
}
//Switch-----------------------------------------------------------
//Exercicio 1
$dia = 2;

switch ($dia){
    case 1:
        echo("Segunda<br/>");
    break;

    case 2:
        echo("Terça<br/>");
    break;
    
    case 3:
        echo("Quarta<br/>");
    break;

    case 4:
        echo("Quinta<br/>");
    break;

    case 5:
        echo("Sexta<br/>");
    break;

    case 6:
        echo("Sábado<br/>");
    break;

    case 7:
        echo("Domingo<br/>");
    break;
}

//While
//Exercicio 1

$i = 0;

while ($i < 20){
    echo($i++); 
}
    echo("<br/>");

//Exercicio 2

$ind = 0;

while ($ind <= 15){
    if($ind == 12 || $ind == 10){
        echo("Número válido, posição: $ind <br/>");
    }

    $ind++;
}

//For----------------------------------------------------------
//Exercicio 1

for($dice = 0; $dice < 10; $dice++){
    echo($dice);
}
    echo("<br/>");

//Exercicio 2
//Se encontra dentro de script html fora do escopo php    

//Dowhile-----------------------------------------------------
//Exercicio 1
$contador = 0;

do{ 
    echo $contador;
    $contador++;
}
while($contador <= 5);

    echo("<br/>");

//Exercicio 2
//Se encontra dentro de script html fora do escopo php   


//-------------------------------------------------------------------------------------------//
?>

<!doctype html>
<html lang ="pt-br">
   <!-- Exercicio 2 - For ----------------------------------------------------------------->
   <!-- Exercicio solicita que criemos um for dentro de uma tabela (<ul>) criando um contador de 0 a 20 que mostre dentro de uma lista (<i>) os valores lidos a cada interação parametrizada no for -->
    <head>
        <title>Exercícios Mod3</title>
        <meta charset="utf-8" />
    </head>
    
    <body>
    <!-- Exercicio 2 - For ----------------------------------------------------------------->
    <!-- Exercicio solicita que criemos um for dentro de uma tabela (<ul>) criando um contador de 0 a 20 que mostre dentro de uma lista (<i>) os valores lidos a cada interação parametrizada no for -->
        <ul>
            <?php
            for($cont = 0; $cont <= 20; $cont++){
            ?>
            <li>
                <?= $cont; ?>
            </li>
            <?php    
            }
            ?>
        </ul>
    <!-- Fim Exercicio 2 - For --------------------------------------------------------------->

    <!-- Exercicio 2 - DoWhile ----------------------------------------------------------------->
    <!-- Exercicio solicita que criemos um DoWhile que faça interações em um contador de 0 a 20 e para quando o valor for, 2, 6 ou 10 a div que representa esse valor fique azul -->
    <div>
        <?php
            $color = 0;
            
            do{
                $color++;
                
                switch($color){
                    case 2:
                ?>
                <div style="background-color: blue;">
                    <h1>Blue 2</h1>
                </div>
                <?php
                    break;
                ?>
                <?php
                    case 6:
                ?>
                <div style="background-color: blue;">
                <h1>Blue 6</h1>
                </div>
                <?php
                    break;
                ?>
                <?php
                    case 10:
                ?>
                <div style="background-color: blue;">
                <h1>Blue 10</h1>
                </div>
                <?php
                    break;
                    

                }
            }
            while($color<=20);
        ?>
    </div>
    <!-- Fim Exercicio 2 - DoWhile --------------------------------------------------------------->



    </body>
</html>