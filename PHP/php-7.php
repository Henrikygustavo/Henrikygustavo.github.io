<?php
$valorCarro = 22500.00;

$valorParcela = 489.65;

$numParcelas = 60;

$valorTotalParcelas = $valorParcela * $numParcelas;

$jurosPagos = $valorTotalParcelas - $valorCarro;

echo "Mariazinha pagará um total de R$ " . number_format($jurosPagos, 2, ',', '.') . " em juros pelo financiamento.";
?>
<br>
<p><a href="index.html">Voltar</a></p>