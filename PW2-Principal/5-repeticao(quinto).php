<?php 

    $n = 0;
    echo "Repetição (While Soma):";
    while( $n <= 10){

        echo "<br/> ". $n; // lembrando que o "." é o método de concatenção em PHP
        $n++;
    }

     //Separando

    $n = 100;
    echo " <br/> <br/>Repetição (While subtração): <br/>";
    while( $n > 0){

        echo "&nbsp; &nbsp; ". $n; // &nbsp; dá espaço, é uma ferramenta vinda do HTML
        $n--;
    }
  
    //Separando

    $n = 500;
    echo " <br/> <br/>Repetição (Do While):";
    do{
        echo "<br/>".$n;
        $n+=2;
    }while ($n <= 520);

     //Separando
    echo "<br/> <br/>Repetição (For Crescente): <br/>";
    for ($x=0; $x<=10; $x++){

            echo "&nbsp;".$x."<br/>";
    }

    //Separando
    echo "<br/> <br/>Repetição (For Decrescente): <br/>";
    for ($x=10; $x>=0; $x--){

            echo "&nbsp;".$x."<br/>";
    }

    //Separando
    echo "<br/> <br/>Repetição (Foreach): <br/>";
    $nomes = array('João','José','Paulo','Pedro'); //variável $nome recebendo um vetor

    foreach ($nomes as $item){ //repetição das posições do vetor, onde $item é a posição do vetor

        echo "<br/>".$item;
    }

    //Separando
    echo "<br/> <br/>Repetição (While com Break): <br/>";
    $x=0;
    while ($x<100){

        echo "<br/>".$x;
        if ($x == 10) //if sem {} verifica se a primeira linha é verdadeira, caso não ela pula e executa a próxima
            break;
            $x++;
    }
   

    //Separando
    echo "<br/> <br/> Repetição com desvio (Goto): <br/>";
    for ($x=1; $x<100; $x++){

        if ($x == 10)
        goto desvio; //estabelecendo um ponto onde a repetição deve parar e seguir para o destino "desvio"

        echo "<br/>".$x;
    }
    desvio:  //destino do goto 
        echo "<br/> Pronto, aqui está o desvio"; 


    //Separando
    echo "<br/> <br/> Repetição com continuação (Continue): <br/>";
    for ($x=1; $x<=100; $x++){ 

        if ($x % 2 == 0){

            continue; //informando que caso a condição do if for respeitada o for deve prosseguir
        }
        echo "<br/>".$x;
    } 
?>