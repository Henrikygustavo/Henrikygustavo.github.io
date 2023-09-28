<?php
$valorMoto = 8654.00;

$taxaJuros = 0.015;

$parcelas = [24, 36, 48, 60];

foreach ($parcelas as $numParcelas) {
    $jurosSimples = $valorMoto * $taxaJuros * $numParcelas;

    $valorTotal = $valorMoto + $jurosSimples;

    $valorParcela = $valorTotal / $numParcelas;

    echo "Para $numParcelas vezes, o valor da parcela é de R$ " . number_format($valorParcela, 2, ',', '.') . "<br>";
    
    $taxaJuros += 0.005;
}
?>
<br>
<p><a href="index.html">Voltar</a></p>