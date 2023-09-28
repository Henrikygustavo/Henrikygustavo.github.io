<?php
// Valor do carro à vista
$valorCarro = 22500.00;

// Valor de cada parcela
$valorParcela = 489.65;

// Número de parcelas
$numParcelas = 60;

// Calcule o valor total dos pagamentos das parcelas
$valorTotalParcelas = $valorParcela * $numParcelas;

// Calcule o valor dos juros pagos
$jurosPagos = $valorTotalParcelas - $valorCarro;

// Exiba o valor dos juros pagos
echo "Mariazinha pagará um total de R$ " . number_format($jurosPagos, 2, ',', '.') . " em juros pelo financiamento.";
?>
<br>
<p><a href="index.html">Voltar</a></p>