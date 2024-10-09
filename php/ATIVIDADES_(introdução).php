<?php
    // Recebe as notas
    $nota1 = 9;
    $nota2 = 8;
    $nota3 = 10;

    // Imprime as notas
    echo $nota1 . '<br/>';
    echo $nota2 . '<br/>';
    echo $nota3 . '<br/>';

    // Calcula a média
    $media = ($nota1 + $nota2 + $nota3) / 3;

    // Exibe a média calculada
    echo "- A média final do aluno é: " . $media . "<br>";

    // Verifica se o aluno está aprovado ou reprovado
    if ($media >= 7) {
        echo "*O aluno está aprovado.*";
    } else {
        echo "*O aluno está reprovado.*";
    }
?>