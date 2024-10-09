<?php
// Definindo o valor das compras do cliente e se ele é VIP
$compras =51.00; // Valor total das compras do cliente
$clienteVIP = false; // Indica se o cliente é VIP

// Verificando se o cliente tem direito ao desconto
if ($compras > 50.00 || $clienteVIP) {
    echo "Cliente com desconto aplicado.";
} else {
    echo "Cliente sem desconto.";
}
?>