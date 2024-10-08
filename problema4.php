<?php

// a) Sequência: 1, 3, 5, 7.....
function sequenceA() { // seguimos um padrão de números ímpares em ordem crescente, cada número é anterior somado a 2. 
    $sequence = [1, 3, 5, 7];
    $next = $sequence[count($sequence) -1] + 2;
    echo "a) O próximo número: $next\n";
}

// b) Sequência: 2, 4, 8, 16, 32, 64....
function sequenceB() { // cada número é o dobro do anterior, ou seja, estamos multiplicando por 2.
    $sequence = [2, 4, 8, 16, 32, 64];
    $next = $sequence[count($sequence) -1] * 2;
    echo "b) O próximo número: $next\n";
}

// c) Sequência: 0, 1, 4, 9, 16, 25, 36...
function sequenceC() { // essa é uma sequência de quadrados perfeitos.
    $sequence = [0, 1, 4, 9, 16, 25, 36]; 
    $next = pow(count($sequence), 2); // O próximo é o quadrado do índice atual
    echo "c) O próximo número: $next\n";
}

// d) Sequência: 4, 16, 36, 64.....
function sequenceD() { //  essa é uma sequência de quadrados perfeitos multiplicados por 4.
    $sequence = [4, 16, 36, 6];
    $next = pow((count($sequence) + 1) * 2, 2);
    echo "d) O próximo número: $next\n";
}

// e) Sequência: 1, 1, 2, 3, 5, 8.....
function sequenceE() { // sequência de Fibonacci, onde cada número é a soma dos dois anteriores. 
    $sequence = [1, 1, 2, 3, 5, 8];
    $next = $sequence[count($sequence) -1] + $sequence[count($sequence) - 2]; // Fibonacci
    echo "e) O próximo número: $next\n";
}

// essa sequência tem dois padrões, Adiciona 8 (2 → 10), depois adiciona 2 (10 → 12) e Adiciona 4 (12 → 16), depois há um incremento constante de 1 (16 → 17 → 18 → 19)
// f) Sequência: 2, 10, 12, 16, 17, 18, 19.....
function sequenceF() { // 
    $sequence = [2, 10, 12, 16, 17, 18, 19];
    $next = $sequence[count($sequence) -1] + 1; 
    echo "f) O próximo número: $next\n";
}

// Chamando cada função para exibir os resultados:

sequenceA();
sequenceB();
sequenceC();
sequenceD();
sequenceE();
sequenceF();

?>