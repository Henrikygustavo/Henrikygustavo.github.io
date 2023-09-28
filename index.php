<!DOCTYPE html>
<html>
<head>
    <title>Tabela de Números Aleatórios</title>
</head>
<body>

<table border="1">
    <?php
    for ($i = 0; $i < 8; $i++) {
        echo "<tr>";
        
        for ($j = 0; $j < 8; $j++) {
            $numero = rand(1, 1000);
            echo "<td>$numero</td>";
        }
        
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
