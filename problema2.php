<?php

// Função para contar a quantidade de vezes que a letra 'a' (Maiúscula ou minúscula) aparece em uma string
function contarLetraA($string) {
    // Inicializa um contador para as ocorrências da letra 'a'
    $contador = 0;

    // Converte a string para um array de caracteres 
    $caracteres = str_split($string);

    // Percorre cada caractere da string
    foreach ($caracteres as $char) {
        // Verifica se o caractere é 'a' ou 'A'
        if ($char == 'a' || $char == 'A') {
            $contador++;
        }
    }

    return $contador;
}

// Exemplo de string
$string = "Aprendendo a programar com PHP é algo fantástico!";

// Conta quantas vezes a letra 'a' aparece 
$quantidade = contarLetraA($string);

// Exibi o resultado
if ($quantidade > 0) {
    echo "A letra 'a' aparece $quantidade vez(es) na string.";

} else {
    echo "A letra 'a' não aparece na string.";
}

?>