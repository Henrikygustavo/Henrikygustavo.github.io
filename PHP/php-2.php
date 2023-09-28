<!DOCTYPE html>
<html>
<head>
    <title>Verificar se um número é divisível por 2</title>
</head>
<body>
    <h1>Verificar se um número é divisível por 2</h1>
    <form method="post" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);

        if ($numero % 2 == 0) {
            echo "<p>Valor divisível por 2</p>";
        } else {
            echo "<p>O valor não é divisível por 2</p>";
        }
    }
    ?>
    <br>
    <p><a href="index.html">Voltar</a></p>
</body>
</html>