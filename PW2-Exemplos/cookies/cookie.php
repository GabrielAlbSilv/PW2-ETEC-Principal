<?php 
    //nome     valor                duração = o cookie permanece se o navegador for fechado
    setcookie("usuario","etecia", time()+86400); //a função setcookie só pode ser declarada no inicio
    // echo $_COOKIE['usuario']; //exibindo o usuário
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando Cookies!</title>
</head>
<body>
    

    <?php 
    
            if(isset($_COOKIE['usuario'])){
                echo "Bem vindo ".$_COOKIE["usuario"] . "! <br> <br><br> <hr>";
                
            }
            else{

                echo "Usuário novo, seja bem vindo!  <br> <br> <br> <hr>";
            }
    ?>
</body>
</html>


<?php 
    /*
    $value = 'aluno';

    setcookie("Ocupacao", $value);
    // (acima) expira no final da sessão (quando o browser fechar)

    setcookie("Ocupacao", $value,time()+60);
    // (acima) expira em 1 minudo 
    */

?>