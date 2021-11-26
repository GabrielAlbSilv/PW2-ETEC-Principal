<?php 

    //Inclui o arquivo apenas uma vez
    echo "Incluindo cabeçalho uma vez";
    include_once("6-aps/cabecalho.php");
    include_once("6-aps/cabecalho.php");
    include_once("6-aps/cabecalho.php");

    //Incliu o arquvio 3 vezes
    echo " </br> </br> </br> </br> Incluindo cabeçalho 3 vezes";
    include("6-aps/cabecalho.php");
    include("6-aps/cabecalho.php");
    include("6-aps/cabecalho.php");

    //Inclui o arquivo caso localize
    echo " </br> </br> </br> </br> Incluindo cabeçalho se o arquivo for encontrado";
    require ("6-aps/cabecalho.php");
    require ("6-aps/corpo.php");
    require ("6-aps/rodape.php");
?>