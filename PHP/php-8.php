<?php
// Valor à vista da moto
$valorMoto = 8654.00;

// Taxa de juros inicial (1,5%)
$taxaJuros = 0.015;

// Número de parcelas em cada opção
$parcelas = [24, 36, 48, 60];

// Calcula o valor das parcelas para cada opção
foreach ($parcelas as $numParcelas) {
    // Calcula o valor dos juros simples
    $jurosSimples = $valorMoto * $taxaJuros * $numParcelas;

    // Calcula o valor total a ser pago
    $valorTotal = $valorMoto + $jurosSimples;

    // Calcula o valor de cada parcela
    $valorParcela = $valorTotal / $numParcelas;

    // Exibe o resultado
    echo "Para $numParcelas vezes, o valor da parcela é de R$ " . number_format($valorParcela, 2, ',', '.') . "<br>";
    
    // Aumenta a taxa de juros em 0,5% para a próxima opção
    $taxaJuros += 0.005;
}
?>
<br>
<p><a href="index.html">Voltar</a></p>