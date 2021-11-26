<?php  

echo "-Importando primiero arquivo (6-aps/cabecalho.php): </br>";

include("6-aps/cabecalho.php");

echo"</br> </br> </br> </br> -Importando o segundo arquivo (2-segundo.php): </br>";
include("2-terceiro.php");

echo"</br> </br> </br> </br> -Importando o terceiro arquivo (3-terceiro.php): </br>";
include("3-terceiro.php");

?>

<?php 

echo "</br> </br> </br> Chamando arquivos por comparação (ifs e else)";

include ("6-aps/cabecalho.php");
$idade = 16;

if($idade <16){

    include ("6-aps/votacao_meno.php");
}else if ($idade < 18){

    include("6-aps/votacao_16.php");
}else{

    include("6-aps/votacao_maior.php");
}



?>