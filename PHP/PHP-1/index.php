<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Soma</title>
</head>
<body>
<?php
// Defina os três valores
$valor1 = 15;
$valor2 = 8;
$valor3 = 12;

// Calcule a soma dos valores
$soma = $valor1 + $valor2 + $valor3;

// Verifique as condições e defina a cor do texto com base nas condições
if ($valor1 > 10) {
    $cor = 'blue';
} elseif ($valor2 < $valor3) {
    $cor = 'green';
} elseif ($valor3 < $valor1 && $valor3 < $valor2) {
    $cor = 'red';
} else {
    $cor = 'black'; // Cor padrão se nenhuma das condições for atendida
}

// Imprima o resultado com a cor especificada em HTML
echo "<p style='color: $cor;'>O resultado da soma é: $soma</p>";
?>
</body>
</html>