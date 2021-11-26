<?php 

   $nome = array("Cleiton","Fabriolo","Altair");

   echo "Os nomes no array </br>";

   foreach ($nome as $nomes){ //repetição das posições do vetor, pegando valores do  vetor $nomes e jogando na variável $nome

    echo "</br>".$nomes;

   }
   echo " </br> </br> </br> Vetor/Array: </br> </br>";

   $num = array(1,2,3,45);

   foreach( $num as $valor){

    echo "Valor é: $valor </br>";

   }

   $num[0] = "um";
   $num[1] = "dois";
   $num[2] = "três";
   $num[3] = "quatro";
   $num[4] = "cinco";
   echo "</br> </br> </br>";

   foreach( $num as $valor){

    echo "Valor é: $valor </br>";
   }
   echo "</br> </br> </br>";
?> 

<?php 
    $salarios = array("João" => 2000, "Pedro" => 1000, "Maria" => 500);
    echo "Salário de João é ".$salarios['João']."</br>";
    echo "Salário de Pedro é ".$salarios['Pedro']."</br>";
    echo "Salário de Maria é ".$salarios['Maria']."</br>";

    $salarios['João']= "Alto";
    $salarios['Pedro']= "Médio";
    $salarios['Maria']= "Baixo";

    echo "</br> </br>";

    echo "Salário de João é ".$salarios['João']."</br>";
    echo "Salário de Pedro é ".$salarios['Pedro']."</br>";
    echo "Salário de Maria é ".$salarios['Maria']."</br>";


?>