<?php
$valorMoto = 8654.00;

$parcelas = [24, 36, 48, 60];

$taxaJuros = 0.02;

foreach ($parcelas as $numParcelas) {
    $montante = $valorMoto * pow(1 + $taxaJuros, $numParcelas);
    $valorParcela = $montante / $numParcelas;

    echo "Para $numParcelas vezes, o valor da parcela é de R$ " . number_format($valorParcela, 2, ',', '.') . "<br>";

    $taxaJuros += 0.003;
}
?>
<br>
<p><a href="index.html">Voltar</a></p>