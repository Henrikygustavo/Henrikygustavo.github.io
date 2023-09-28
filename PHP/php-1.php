<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Soma</title>
</head>
<body>
    <h1>Calculadora de Soma</h1>
    <form method="post" action="">
        <label for="valor1">Valor 1:</label>
        <input name="valor1" id="valor1" required>
        <br><br>
        <label for="valor2">Valor 2:</label>
        <input name="valor2" id="valor2" required>
        <br><br>
        <label for="valor3">Valor 3:</label>
        <input name="valor3" id="valor3" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = floatval($_POST["valor1"]);
        $valor2 = floatval($_POST["valor2"]);
        $valor3 = floatval($_POST["valor3"]);

        $soma = $valor1 + $valor2 + $valor3;

        if ($valor1 > 10) {
            $cor = 'blue';
        } elseif ($valor2 < $valor3) {
            $cor = 'green';
        } elseif ($valor3 < $valor1 && $valor3 < $valor2) {
            $cor = 'red';
        } else {
            $cor = 'black';
        }

        echo "<p style='color: $cor;'>O resultado da soma é: $soma</p>";
    }
    ?>
    <br>
    <p><a href="index.html">Voltar</a></p>
</body>
</html>