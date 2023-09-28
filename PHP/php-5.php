<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Área de Triângulo Retângulo</title>
</head>
<body>
    <h1>Calculadora de Área de Triângulo Retângulo</h1>
    <form method="post" action="">
        <label for="base">Base (metros):</label>
        <input type="number" name="base" id="base" required>
        <br><br>
        <label for="altura">Altura (metros):</label>
        <input type="number" name="altura" id="altura" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtenha a base e a altura do formulário
        $base = floatval($_POST["base"]);
        $altura = floatval($_POST["altura"]);

        // Calcule a área do triângulo retângulo
        $area = ($base * $altura) / 2;

        // Exiba a frase com o resultado
        echo "A área do triângulo retângulo com base $base metros e altura $altura metros é $area metros quadrados.";
    }
    ?>
    <br>
    <p><a href="index.html">Voltar</a></p>
</body>
</html>