<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <div class="home-container">
        <h2>Welcome to the Home Page</h2>

        <h3>Cadastro de Clientes</h3>
        <form action="cadastro.php" method="post">
            <!-- Campos de cadastro aqui -->
            <button type="submit">Cadastrar Cliente</button>
        </form>

        <h3>Listagem de Clientes</h3>
        <form action="listagem.php" method="post">
            <label for="filtro">Filtrar por Nome:</label>
            <input type="text" id="filtro" name="filtro">

            <button type="submit">Filtrar</button>
        </form>

        <!-- Tabela de listagem aqui -->

    </div>
</body>
</html>