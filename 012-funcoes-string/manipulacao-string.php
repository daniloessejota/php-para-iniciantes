<?php

//1. printf - serve para exibir um valor já formatado em seu formato final. (Herança da Linguagem C)

$produto = "Leite";
$preco = 4.5;

    printf("o %s está custando R$ %.2f", $produto, $preco); // f - float, para números reais;

    // %d - valor decimal (positivo ou negativo)
    // %u - valor decimal sem sinal (apenas positivo)
    // %d - valor real
    // %d - para strings

// 2. print_r - para mostrar detalhes de uma variavel se ela for um vetor;

$array [0] = 45;
$array [1] = 12;
$array [2] = 64;

    print_r($array); //pode ser substituida por: var_dump ($array) ou var_exports ($array);

    //Muito útil para realização de testes;

// 3. wordwrap - Ela quebra o texto dentro do código-fonte e no que é visto na tela;

$text = "Este é um exemplo de uma string gigante que...";
$resultado = wordwrap($text, 3, "<br>\n",false);

    echo($resultado);

// 4. strlen - calcula a quantidade de caracteres/letras de uma string;

// 5. trim - recorta pedaços dentro de uma string, principalmente os espaços do começo ou do fim de uma string.

// 6. ltrim - recorta pedaços dentro de uma string, os espaços do começo (a esquerda) de uma string.

// 7. rtrim - recorta pedaços dentro de uma string, os espaços do final (a direita) de uma string.

// 8. str_word_count - conta quantas palavras existem dentro uma string;

$frase = "Eu vou estudadar PHP";
$contador = str_word_count($frase, 0); //0 -  conta somente as palavras, 1 - cria um vetor com as palavras da string em ordem, 2 - cria um vetor com as palavras da string fora de ordem;

    echo $contador;

// 9.explode - uma versão mais atualizada da função anterior, pega cada palavra da string e coloca dentro de um índice em array;

$site = "Curso em Vídeo";
$array = explode(" ",$site); // " " - serve para indicar a função para desconsiderar os espaços em branco entre as palavras e usar somente as palavras da string;

    print_r($array);

// 10. str_split - pega cada letra da string e coloca dentro de um índice em um array;

// 11. implode - serve para fazer o contrário da função explode;

$vetor[0] = "Danilo";
$vetor[1] = "Silva";
$vetor[2] = "Jesus";
$nome = implode(" ", $vetor); // você pode susbtituir essa função pela função join;

    print($nome);

// 12. chr - para saber qual a respectiva letra do teclado do número informado;

$letra = chr(128);
echo "A letra de código 128 é: $letra.";

// 13. ord - faz o contrário da função chr;

$letra = "D";
$codigo = ord($letra);

echo ("o código de $letra é $codigo");

// 14. strtolower - escreve as letras de uma string em caixa baixa (letras minúsculas);

// 15. srttoupper - escreve as letras de uma string em caixa alta (letras maiúsculas);

// 16. ucfirst - escreve a primeira letra de uma string em maiúscula (uc -> uppercase);

// 17. ucwords - escreve a primeira letra de cada palavra de uma string em maiúscula;

// 18. strrev - coloca as palavras de uma string ao contrario -> danilo - olinad.

// 19. strpos - verifica em qual posição um substring se encontra dentro de uma string maior;

// 20. stripos - verifica em qual posição um substring se encontra dentro de uma string maior ignorando se a string está em maiúscula ou miniscúla;

// 21. substr_count - mostra quantas vezes uma string foi encontrada dentro uma frase;

// 22. substr -

$site = "Globo Esporte";
$substring = substr($site,0,5); // -> 0 indica em que posição a contagem inicia e o 5 indica quantas letras a função avança na contagem;

    echo "$substring";

// 23. - str_pad faz com que uma string se encaixe em um determinado espaço;

$nome = "CCE Info";
$novoNome = str_pad($nome, 30, " ", STR_PAD_RIGHT);

    echo("Meu notebook é um $novoNome");

// 24. str_repeat - repete um string com base em uma quantidade em número passada por parâmetro na função;

// 25. str_replace ou str_ireplace - substitui a string original por uma outra passada por parâmetro na função.

?>