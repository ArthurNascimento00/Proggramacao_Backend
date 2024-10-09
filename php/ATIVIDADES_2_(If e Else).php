<?php
// Função que calcula o salário total (incluindo bônus, se aplicável)
function calcularSalarioTotal($salario, $horasExtras) {
    $bonus = 0; // Inicializa o bônus como zero

    // Verifica se o salário é menor que R$ 2000 e se o funcionário fez mais de 10 horas extras
    if ($salario < 2000 && $horasExtras > 10) {
        $bonus = 0.20 * $salario; // Calcula o bônus de 20%
    }
    // Verifica se o salário é maior ou igual a R$ 2000 e se o funcionário fez mais de 5 horas extras
    elseif ($salario >= 2000 && $horasExtras > 5) {
        $bonus = 0.10 * $salario; // Calcula o bônus de 10%
    }

    // Retorna o salário total (salário base + bônus)
    return $salario + $bonus;
}

// Exemplo de uso da função
$salarioFuncionario = 1800; // Salário do funcionário
$horasExtrasFuncionario = 12; // Horas extras trabalhadas

// Calcula o salário total
$salarioTotal = calcularSalarioTotal($salarioFuncionario, $horasExtrasFuncionario);

// Exibe o resultado
echo "O salário total do funcionário é: R$ " . number_format($salarioTotal, 2, ',', '.');
?>