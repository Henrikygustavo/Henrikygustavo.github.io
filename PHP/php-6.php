<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Compra na Feira</title>
</head>
<body>
    <h1>Calculadora de Compra na Feira</h1>
    <form method="post" action="">
        <label for="maca">Maçã (R$/kg):</label>
        <input type="number" step="0.01" name="maca" id="maca" required>
        <label for="quantidade_maca">Quantidade (kg):</label>
        <input type="number" step="0.01" name="quantidade_maca" id="quantidade_maca" required>
        <br><br>

        <label for="melancia">Melancia (R$/kg):</label>
        <input type="number" step="0.01" name="melancia" id="melancia" required>
        <label for="quantidade_melancia">Quantidade (kg):</label>
        <input type="number" step="0.01" name="quantidade_melancia" id="quantidade_melancia" required>
        <br><br>

        <label for="laranja">Laranja (R$/kg):</label>
        <input type="number" step="0.01" name="laranja" id="laranja" required>
        <label for="quantidade_laranja">Quantidade (kg):</label>
        <input type="number" step="0.01" name="quantidade_laranja" id="quantidade_laranja" required>
        <br><br>

        <label for="repolho">Repolho (R$/kg):</label>
        <input type="number" step="0.01" name="repolho" id="repolho" required>
        <label for="quantidade_repolho">Quantidade (kg):</label>
        <input type="number" step="0.01" name="quantidade_repolho" id="quantidade_repolho" required>
        <br><br>

        <label for="cenoura">Cenoura (R$/kg):</label>
        <input type="number" step="0.01" name="cenoura" id="cenoura" required>
        <label for="quantidade_cenoura">Quantidade (kg):</label>
        <input type="number" step="0.01" name="quantidade_cenoura" id="quantidade_cenoura" required>
        <br><br>

        <label for="batatinha">Batatinha (R$/kg):</label>
        <input type="number" step="0.01" name="batatinha" id="batatinha" required>
        <label for="quantidade_batatinha">Quantidade (kg):</label>
        <input type="number" step="0.01" name="quantidade_batatinha" id="quantidade_batatinha" required>
        <br><br>

        <input type="submit" value="Calcular Compra">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtenha os preços por quilo e quantidades dos produtos do formulário
        $precoMaca = floatval($_POST["maca"]);
        $quantidadeMaca = floatval($_POST["quantidade_maca"]);

        $precoMelancia = floatval($_POST["melancia"]);
        $quantidadeMelancia = floatval($_POST["quantidade_melancia"]);

        $precoLaranja = floatval($_POST["laranja"]);
        $quantidadeLaranja = floatval($_POST["quantidade_laranja"]);

        $precoRepolho = floatval($_POST["repolho"]);
        $quantidadeRepolho = floatval($_POST["quantidade_repolho"]);

        $precoCenoura = floatval($_POST["cenoura"]);
        $quantidadeCenoura = floatval($_POST["quantidade_cenoura"]);

        $precoBatatinha = floatval($_POST["batatinha"]);
        $quantidadeBatatinha = floatval($_POST["quantidade_batatinha"]);

        // Calcule o valor total da compra
        $valorTotal = ($precoMaca * $quantidadeMaca) +
                      ($precoMelancia * $quantidadeMelancia) +
                      ($precoLaranja * $quantidadeLaranja) +
                      ($precoRepolho * $quantidadeRepolho) +
                      ($precoCenoura * $quantidadeCenoura) +
                      ($precoBatatinha * $quantidadeBatatinha);

        // Valor disponível que Joãozinho tem
        $dinheiroDisponivel = 50.00;

        // Verifique se Joãozinho tem dinheiro suficiente para pagar a conta
        if ($valorTotal > $dinheiroDisponivel) {
            $diferenca = $valorTotal - $dinheiroDisponivel;
            echo "<p style='color: red;'>Joãozinho não tem dinheiro suficiente. Faltam R$ $diferenca.</p>";
        } elseif ($valorTotal == $dinheiroDisponivel) {
            echo "<p style='color: green;'>Joãozinho esgotou seu saldo para compras.</p>";
        } else {
            $saldo = $dinheiroDisponivel - $valorTotal;
            echo "<p style='color: blue;'>Joãozinho ainda pode gastar R$ $saldo.</p>";
        }

        // Exiba o valor total da compra
        echo "O valor total da compra foi de R$ $valorTotal.";
    }
    ?>
    <br>
    <p><a href="index.html">Voltar</a></p>
</body>
</html>