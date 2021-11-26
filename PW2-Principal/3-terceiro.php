<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terceiro</title>
</head>
<body>

<?php 
    print "Usando para exibir na tela <br/>";

    $data = "26 de agosto de 2020";
    $salario = 850.00;
    $cargo = "Estegiário";
    $idade = 18;
    $resultado = true;

    echo "Arquivo crido em $data <br/>";

    printf("Salário mínimo: R$ %.2f <br/>", $salario);

    $texto = sprintf("%s recebe R$ %.2f por mês", $cargo, $salario*2);

    echo $texto;

    /*if ($resultado){
        echo "<br/> Verdadeiro";
    }*/
?>

<?php 

echo "<br/> <br/> <br/> <br/> (Separando os códigos PHP)<br/> <br/>";

//declarações corretas
$cor = "azul";
$cor_do_fundo = "amarelo";
$_cor = "vermelho";

//as variáveis não possuem nenhuma relação uma com a outra

$fundo = "azul";
$Fundo = "amarelo";
$FUNDO = "vermelho";

echo $fundo."-".$Fundo."-".$FUNDO; // o "." é o modo de concatenação em PHP

echo "<br/> <br/> <br/> <br/> (Separando os códigos PHP)<br/> <br/>";
?>

<?php 
    $nome = "Armandino"; //variável local no script PHP

    function exibir(){  //implementação de uma função
        $nome = "Josefina"; //variável local na função exibir
        echo "Valor da variável dentro da função, nome = ".$nome;
    }

    exibir(); //chamada da função

    echo"<br/> Valor da variável fora da função, nome = ".$nome;
?>



<?php
    echo "<br/> <br/> <br/> <br/> (Separando os códigos PHP)<br/> <br/>";
    $ano = 2020; //variável local no script

    //implementação de uma função
    function exibil($parametro){  //variável como parâmetro
        $parametro = $parametro + 4;
        return $parametro;
    }

    echo "Estamos em ".$ano." e daqui a 4 anos estaremos em ".exibil($ano); // o "." é o modo de concatenação em PHP

?>

<?php 
    echo "<br/> <br/> <br/> <br/> (Separando os códigos PHP)<br/> <br/>";

    //implementação de uma função
    function somaValor($num1, $num2){ //variáveis 

        $resp = $num1+$num2;

        return $resp;

    }

    $resp = somaValor(10,20); //alocando os valores 10 e 20 em num1 e num2 respectivamente
    echo "a resposta é ".$resp; // o "." é o modo de concatenação em PHP

?>

<?php
    echo "<br/> <br/> <br/> <br/> (Separando os códigos PHP)<br/> <br/>";


    $ano1 = 2020; //variável local no script

    //implementação de uma função
    function exibir1(){  //variável como parâmetro
        GLOBAL $ano1; //definição de variável global
        $ano1++;
        return $ano1;
    }

   echo "<br/> Ano:".$ano1; // o "." é o modo de concatenação em PHP
   echo "<br/> Ano:".exibir1(); // o "." é o modo de concatenação em PHP
   echo "<br/> Ano:".exibir1(); // o "." é o modo de concatenação em PHP
   echo "<br/> Ano:".$ano1; // o "." é o modo de concatenação em PHP

?>


<?php
    echo "<br/> <br/> <br/> <br/> (Separando os códigos PHP)<br/> <br/>";


    //implementação de uma função
    function exibir2(){  //variável como parâmetro
        STATIC $ano2; //definição de variável global
        $ano2++;
        return $ano2;
    }

   echo "<br/>".exibir2(); // o "." é o modo de concatenação em PHP
   echo "<br/>".exibir2(); // o "." é o modo de concatenação em PHP
   echo "<br/>".exibir2(); // o "." é o modo de concatenação em PHP
   echo "<br/>".exibir2(); // o "." é o modo de concatenação em PHP

?>

</body>
</html
