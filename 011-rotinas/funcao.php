<?php
    /* function soma($a, $b)
    {
        echo "A soma dos valores $a e $b vale: "  . $a + $b . "<br>";
    }

    soma (6, 94);
    soma (7.5, 92.5); */

    //quando uma função não retorna valor, chamamos ela de PROCEDIMENTO.



    /* function soma($a, $b)
    {
        return $a + $b;
    }

    $x = 56;
    $y = 44;

    $resultado = soma($x, $y);

    echo "A soma dos valores $x e $y vale: "  . $resultado . "<br>"; */

    //quando uma função retorna um valor, chamamos de FUNÇÃO.



    //ROTINAS COM MÚLTIPLOS PARÂMETROS:

    function soma(...$p) //---> função que substitui a função "func_get_args()", nas versões mais recentes do PHP, serve para criar um vetor dos parametros recebidos.
    {
        $total = func_num_args(); // ---> função própria do PHP que conta o número de argumentos que existem.
        $s = 0;

        for ($i=0; $i < $total ; $i++) {
            $s += $p[$i];
        }

        return $s;
    }

    $resutado = soma(15, 45, 90, 1000, 56, 456, 980);

    echo $resutado;

?>
