<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Área de Quadrado</title>
</head>
<body>
    <h1>Calculadora de Área de Quadrado</h1>
    <form method="post" action="">
        <label for="lado">Comprimento do Lado (metros):</label>
        <input type="number" name="lado" id="lado" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtenha o comprimento do lado do quadrado do formulário
        $comprimentoLado = floatval($_POST["lado"]);

        // Calcule a área do quadrado
        $area = $comprimentoLado * $comprimentoLado;

        // Exiba a frase com o resultado
        echo "A área do quadrado de lado $comprimentoLado metros é $area metros quadrados.";
    }
    ?>
    <br>
    <p><a href="index.html">Voltar</a></p>
</body>
</html>