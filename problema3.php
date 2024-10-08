<?php

$indice = 12; // Variavel que define o limite do loop até 12.  
$soma = 0; // Variável que vai armanezar a soma dos valores.
$k = 1; // Variável que controla o loop, começa em 1.

while ($k < $indice) { // Loop que contunua enquanto $k for menor que 12.
    $k = $k + 1; // Incrementa $k a cada volta do loop.
    $soma = $soma + $k; // Adiciona o valor atual de $k á soma total.
}

echo $soma; // Exibi o valor final da soma (que será 77)

?>


