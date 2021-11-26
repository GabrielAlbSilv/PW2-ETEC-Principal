<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessão - Implementando os formulários</title>
    <?php 
        session_start(); //iniciando sessão
    ?>
</head>
<body>
    
        <b>Funcionário:  </b> <?php  echo $_SESSION["nome"]; ?>,logado com sucesso.<br>
        <b>Data de conexão: </b> <?php echo date("d/m/y"); ?> <br>
        <b>Hora de conexão: </b> <?php echo date("h:i:s"); ?> <br>
        <br>
        <a href="sessao_formularios_valida.php"> Área do administrador</a>
</body>
</html>