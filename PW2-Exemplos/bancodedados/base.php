<?php 

    //Criando uma conexão com o banco de dados
    $con = mysqli_connect("localhost","root","", "empresaabc"); //emppresaabc é o banco de dados

    //Checando a conexão
    if(mysqli_connect_errno($con)){

        echo "Erro ao conectar com a base de dados";
        mysqli_connect_error();
    }else{

        echo"Conexão aberta";
        mysqli_close($con); //encerrando sessão
        echo"<br> <br> <br> Conexão encerrada";
    }




?>