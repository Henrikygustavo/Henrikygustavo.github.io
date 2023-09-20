<!DOCTYPE html>
<html>
<head>
    <title>Tabela de Números Aleatórios</title>
</head>
<body>

<table border="1">
    <?php
    // Loop para criar 8 linhas
    for ($i = 0; $i < 8; $i++) {
        echo "<tr>";
        
        // Loop para criar 8 colunas
        for ($j = 0; $j < 8; $j++) {
            // Gerar um número aleatório entre 1 e 100
            $numero = rand(1, 1000);
            echo "<td>$numero</td>";
        }
        
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
