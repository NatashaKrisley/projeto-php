<?php

// Função que retorna o próximo número na sequência de Fibonacci, caso $num pertença á sequência. 
function proximo($num)
{
    $fibo = [1,1]; // Inicializa o array Fibonacci com os dois primeiros números (1, 1).
    $i = 1; // Váriavel de controle para a posição no array $fibo.

    // Loop que continua enquanto o número Fibonacci atual for menor ou igual ao número $num.
    while($fibo[$i] <= $num) {

        // Calcula o próximo de sequência de Fibonacci.
        $fibo[$i + 1] = $fibo[$i] + $fibo[$i - 1];

        // Se o número atual da seuência ($fibo[$i]) for igual a $num, a resposta será o próximo número Fibonacci.
        // Caso contrário, a resposta será false.
        ($fibo[$i] == $num) ? $resposta = $fibo[$i + 1] : $resposta = false;

        $i++; // Retorna o próximo número Fibonacci se $num pertencer a sequência , ou false se não pertencer.

    }
    
    
    return $resposta;
}

// Função que verifica se o número pertence a sequência de Fibonacci.
function pertenceFibonacci($num)
{
    $fiboAnterior = 0; // Inicialixa o primeiro n;umero da sequência (Fibonacci anterior).
    $fiboAtual = 1; // Inicializa o segundo número da sequência (Fibonacci atual).

    // Se o número for 0 ou 1, e;e pertence a sequência de Fibonacci, então retona true.
    if ($num == 0 || $num == 1) {
        return true;
    }

// Loop que continua somando os n;umeros da sequência de Fibonacci at;e alcançar ou passar de $num.
while ($fiboAtual < $num) {
    // Calcula o próximo número da sequência somando o anterior com o atual.
    $fiboProximo = $fiboAnterior + $fiboAtual;

    // Atualiza os valores: o Fibonacci anterior vira o atual, e o Fibonacci atual vira o próximo.
    $fiboAnterior = $fiboAtual;
    $fiboAtual = $fiboProximo;

}

    // Se o número $num for igual ao Fibonacci atual, retorna true, indicando que ele pertence á sequência.
    // Caso contrário, retorna false.
    return  ($fiboAtual == $num);

}

// Define o número que queremos verificar se pertence a sequência de Fibonacci.
$num = 8;

// Verifica se o número $num pertence a sequência de Fibonacci, usando a função pertenceFibonacci().
if (pertenceFibonacci($num)) {

    echo "O número $num pertence á sequência de Fibonacci.";

} else {
    echo "O número $num NÃO pertence á sequência de Fibonacci";
}

?>