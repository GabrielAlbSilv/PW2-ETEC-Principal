<?php 

    $nomes= "Altair";

    $variavel = array("MA" =>  "Maria", "ZE" => "José", "PE" => "Pedro");


    echo "Verificando se é array ou não: <br/>  <br/>";

    if (is_array($variavel)){ //função is_array verifica se é um vetor

        echo"<br/> Variável: variavel é um array";

    }else{

        echo "<br/> Variável: variavel não é um array!";
    }

    if (is_array($nomes)){

        echo"<br/> Variável: nomes é um array";

    }else{

        echo "<br/> Variável: nomes não é um array!";
    }

    echo "</br> </br> +--------------------------------------------------------------------------------------------------+ </br> </br>"
?>

<?php 

$nomes = array("Altair", "Vega", "Deneb");
array_unshift($nomes, "Proxima Centauri" ); //função array_unshift insere um valor na primeira posição do vetor

echo " Preenchendo nomes na primeira posição do vetor: <br/>";

foreach ($nomes as $item){

    echo "<br/> Estrela: ".$item."<br/>";
}
echo "</br> </br> +--------------------------------------------------------------------------------------------------+ </br> </br>"
?>


<?php 

$nomes = array("Altair", "Vega", "Deneb");
array_push($nomes, "Proxima Centauri" ); //função array_push insere um valor na última posição do vetor

echo " Preenchendo nomes na última posição do vetor: <br/>";

foreach ($nomes as $item){

    echo "<br/> Estrela: ".$item."<br/>";
}
echo "</br> </br> +--------------------------------------------------------------------------------------------------+ </br> </br>"
?>



<?php 

$nomes = array("Altair", "Vega", "Deneb");
$excluido = array_shift($nomes); //função array_shift remove o valor da primeira posição do vetor

echo "Excluindo nome da primeira posição do vetor: <br/>";

foreach ($nomes as $item){

    echo "<br/> Estrela: ".$item."<br/>";
}

echo "<br/> </br> Estrela-Excluída: ".$excluido."<br/>";


echo "</br> </br> +--------------------------------------------------------------------------------------------------+ </br> </br>"
?>


<?php 

$nomes = array("Altair", "Vega", "Deneb");
$excluido = array_pop($nomes); //função array_pop remove o valor da última posição do vetor

echo "Excluindo nome da última posição do vetor: <br/>";

foreach ($nomes as $item){

    echo "<br/> Estrela: ".$item."<br/>";
}

echo "<br/> <br/> Estrela-Excluída: ".$excluido."<br/>";


echo "</br> </br> +--------------------------------------------------------------------------------------------------+ </br> </br>"
?>

<?php 

$nomes = array("Alt" => "Altair", "Veg" => "Vega", "Deb" => "Deneb");

echo "Procurando estrelas: <br/>";

if (array_key_exists("Alt",$nomes)){ //função array_key_exists procura uma posição do vetor pela sua chave

    echo " </br> Nome de estrela: Altair encontrado pela chave:  Alt";
}
echo "</br> </br> +--------------------------------------------------------------------------------------------------+ </br> </br>"

?>


<?php 

$nomes = array("Alt" => "Altair", "Veg" => "Vega", "Deb" => "Deneb");
$chave = array_search("Altair",$nomes); //busca a chave de um valor
echo "Procurando chaves de estrelas: <br/>";

echo "<br/> Busca realizada, chave encontrada:  ".$chave;

echo "</br> </br> +--------------------------------------------------------------------------------------------------+ </br> </br>"

?>


<?php 

$nomes = array("Alt" => "Altair", "Veg" => "Vega", "Deb" => "Deneb");
$chave = array_keys($nomes); //busca a chave de um valor dentro de outro veotr
echo "Procurando chaves de estrelas: <br/>";

foreach ($chave as $item){

    echo"<br/> <br/> Chave: ".$item;

}
echo "<br/> <br/> -Posições: <br/>";

print_r($chave); //exibe as posições

echo "</br> </br> +--------------------------------------------------------------------------------------------------+ </br> </br>"

?>

<?php 

$nomes = array("Alt" => "Altair", "Veg" => "Vega", "Deb" => "Deneb");

echo "Procurando posições de chaves de estrelas: <br/>";

$valores = array_values($nomes); //pega as posições de um vetor

echo "<br/> <br/> -Posições: <br/>";
print_r($valores); //exibe as posições

echo "</br> </br> +--------------------------------------------------------------------------------------------------+ </br> </br>"

?>


<?php 

$nomes = array("Alt" => "Altair", "Veg" => "Vega", "Deb" => "Deneb");

echo "Estrelas: <br/>";

//exibindo com base na posição do ponteiro dentro do vetor
echo"<br/> Next: ".next($nomes); //Próximo
echo"<br/> End: ".end($nomes); //Último
echo"<br/> Prev: ".prev($nomes);//Anterior
echo"<br/> Reset: ".reset($nomes);//Reinicio

echo "</br> </br> +--------------------------------------------------------------------------------------------------+ </br> </br>"

?>

<?php 

$nomes = array("Alt" => "Altair", "Veg" => "Vega", "Deb" => "Deneb");

echo "Chaves de Estrelas: <br/>";

while ($chave = key($nomes)){ //chaves dentro do vetor nomes

    echo "<br/> ".$chave;
    next($nomes); //guiando as chaves pelo ponteiro no vetor, next: próxima
}



echo "</br> </br> +--------------------------------------------------------------------------------------------------+ </br> </br>"

?>

<?php 

$nomes = array("Alt" => "Altair", "Veg" => "Vega", "Deb" => "Deneb");
$reverso = array_reverse($nomes); //inverte a ordem das posições do vetor nomes

echo "Chaves Estrelas em ordem reversa: <br/>";

print_r($reverso); //exibindo essas possições

echo "</br> </br> +--------------------------------------------------------------------------------------------------+ </br> </br>"

?>


<?php 

$nomes = array("Alt" => "Altair", "Veg" => "Vega", "Deb" => "Deneb");

echo  "Estrelas Ordenados da menor posição até a maior posição dentro de um vetor: <br/> <br/>";

sort($nomes); //ordena as posições da menor pare a maior 
print_r($nomes); //exibindo essas possições

echo "</br> </br> +--------------------------------------------------------------------------------------------------+ </br> </br>"

?>

<?php 

$texto = "micro Computador";

$tamanho = strlen($texto); //tamanho da string

echo "Manipulando Strings: <br/>";

echo "<br/>".$texto." possui ".$tamanho." caracteres";

echo "<br/>".strtoupper($texto);

echo "<br/>".strtolower($texto);

echo "<br/>".ucfirst($texto);

echo "<br/>".ucwords($texto);

//3 caracteres a partir da posição 3

echo "<br/>".substr($texto,13,3);

echo "<br/>".str_replace("micro","Nano",$texto);

echo "</br> </br> +--------------------------------------------------------------------------------------------------+ </br> </br>"
?>

<?php 

echo "Informando data e hora: <br/> <br/>";

$dataAtual = date("d/m/y");

echo "<br/> Hoje é: ".$dataAtual."<br/>";

$hora = date("h:i:s");

echo "<br/>Agora são: ".$hora. "<br/>";

$dataHora = date("d/m/y h:i:s");

echo "<br/>Data e hora: ".$dataHora. "<br/>";

echo "</br> </br> +--------------------------------------------------------------------------------------------------+ </br> </br>"
?>


