<pre>
    <?php

    $carro = array("Gol", "Fiesta", "Cruze", "Dobló", "Argo");

    print_r($carro);

    array_push($carro, "208"); //adiciona um elemento ao final do vetor;

    print_r($carro);

    array_pop($carro); //elimina o último elemento de um vetor;

    print_r($carro);

    //SÃO FUNÇÕES ESPECÍFICAS PARA TRATAMENTO DE ESTRUTURAS DE PILHA - LIFO (last in-first out);



    //GERENCIAR ELEMENTOS NO ÍNICIO DO VETOR

    array_unshift($carro, "Fusion"); //adicionar

    print_r($carro);

    array_shift($carro); //remover

    print_r($carro);



    //COLOCANDO VETORES EM ORDEM

    /*sort($carro); //ordem crescente ou alfabética;
    print_r($carro);

    rsort($carro); //ordem decrescente;
    print_r($carro); */


    //ORDEM ASSOCIATIVA

    //asort($carro); //altera a ordem tantos dos valores quanto dos índices;
    //print_r($carro);

    //arsort($carro); altera a ordem de forma reversa tantos dos valores quanto dos índices;
    //print_r($carro);

    //ORDENAÇÃO POR CHAVES

    $carros = array( 2 => "Up!",
                    3 => "Ka",
                    1 => "S10",
                    7 => "Palio",
                    0 => "Polo");

    print_r($carros);

    //ksort($carros);
    krsort($carros); //para a ordem reversa
    print_r($carros);

    ?>
</pre>