<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Área de Retângulo</title>
</head>
<body>
    <h1>Calculadora de Área de Retângulo</h1>
    <form method="post" action="">
        <label for="ladoA">Lado A (metros):</label>
        <input type="number" name="ladoA" id="ladoA" required>
        <br><br>
        <label for="ladoB">Lado B (metros):</label>
        <input type="number" name="ladoB" id="ladoB" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ladoA = floatval($_POST["ladoA"]);
        $ladoB = floatval($_POST["ladoB"]);

        $area = $ladoA * $ladoB;

        if ($area > 10) {
            echo "<h1>A área do retângulo de lados $ladoA e $ladoB metros é $area metros quadrados.</h1>";
        } else {
            echo "<h3>A área do retângulo de lados $ladoA e $ladoB metros é $area metros quadrados.</h3>";
        }
    }
    ?>
    <br>
    <p><a href="index.html">Voltar</a></p>
</body>
</html>