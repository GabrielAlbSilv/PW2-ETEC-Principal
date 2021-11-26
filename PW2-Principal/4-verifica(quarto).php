<?php  

    echo "<br/> Olá seja bem vindo".$_SERVER['REMOTE_ADDR']."<br/>"; //fazendo mostrar quantos usuários estão usando o pc
    echo "Você está utilizando o navegador ".$_SERVER['HTTP_USER_AGENT']."<br/> <br/>"; //fazendo mostrar qual navegador está sendo utilizado

?>


<?php 

    define("PI", 3.14162537); //anexando um valor imutável na variável PI
    define("DISC", "Matemática"); //anexando  um valor imutável na variável DISC 

    echo "O valor de pi é: ".PI."<br/>"; //exibindo a variável PI
    echo  "O nome do curso é: ".DISC."<br/> <br/>"; //exibindo a variável DISC
?>

<?php 

    $opcao = 5;

    switch ($opcao){

        case 1: 
            echo "A opção 1 foi selecionada <br/> <br/>";
        break;

        case 2: 
            echo "A opção 2 foi selecionada <br/> <br/>";
        break;

        case 3: 
            echo "A opção 3 foi selecionada <br/> <br/>";
        break;

        default: 
            echo "Opção incorreta <br/> <br/>";
        break;

    }

?>