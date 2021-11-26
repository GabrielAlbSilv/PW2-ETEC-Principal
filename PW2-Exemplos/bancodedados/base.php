<?php 

    //Criando uma conexão com o banco de dados
    $con = mysqli_connect("localhost","root","");

    //Checando a conexão
    if(mysqli_connect_errno($con)){

        echo "Erro ao conectar com a base de dados";
    }else{

        echo"conexão aberta";
    }




?>