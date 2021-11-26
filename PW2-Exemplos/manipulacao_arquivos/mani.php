<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulando Arquivos</title>
</head>
<body>
    

    <?php 
    //exbindo conteúdo de um arquivo
    echo "<h3>Exibindo contéudo de um arquivo txt:</h3>";
    $file = fopen("teste.txt","r") //abrindo arquivo
    or exit ("Não foi possível abrir o arquivo"); //exibindo mensagem caso não abra

    while (!feof($file)){
    $linha = fgets($file); //fgets retorna uma linha do arquivo
    echo $linha . "<br>"; //exibindo linha
    }
    
    fclose($file); //fechando arquivo
    ?>

    <hr>

    <?php 
    //colocando valores em um arquivo
    $file2 = fopen("teste2.txt","w")
    or exit ("Não foi possível abrir o arquivo");

    $conteudo = 'Bairro: '; //criando variável e alocando um valor
    fwrite($file2, $conteudo); //colocando o valor da variável no arquivo file2
    fwrite($file2, 'Osasco'); //colocando mais um valor no arquvio file2
    fclose($file2);
    ?>

    <?php 
    //contando acessos
    $file = "teste.txt";
    if(file_exists($file)){
        $file = fopen("file","r");
        /*funcao chop remove os espaços e quebra
        de linha existentes no fim de uma string*/
        $cont = chop(fgets($file));
        fclose($file);
        $cont++;



    }
    
    ?>
    
</body>
</html>