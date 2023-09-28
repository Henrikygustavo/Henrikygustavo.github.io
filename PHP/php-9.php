<?php
// Valor do carro à vista
$valorMoto = 8654.00;

// Número de parcelas em cada opção
$parcelas = [24, 36, 48, 60];

// Taxa de juros inicial (2%)
$taxaJuros = 0.02;

// Cálculo do valor das parcelas para cada opção
foreach ($parcelas as $numParcelas) {
    // Cálculo dos juros compostos
    $montante = $valorMoto * pow(1 + $taxaJuros, $numParcelas);
    $valorParcela = $montante / $numParcelas;

    // Exibição do resultado
    echo "Para $numParcelas vezes, o valor da parcela é de R$ " . number_format($valorParcela, 2, ',', '.') . "<br>";

    // Aumento da taxa de juros em 0,3% para a próxima opção
    $taxaJuros += 0.003;
}
?>
<br>
<p><a href="index.html">Voltar</a></p>