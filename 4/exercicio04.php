<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="Calcular o fatorial">Verificar</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['Calcular o fatorial'])) {
            $numero = ($_POST['numero']);
            $fatorial = 1;

            for ($i = 1; $i <= $numero; $i++) {
                $fatorial *= $i;
            }

            echo "O fatorial de $numero é: $fatorial";
        }
    }

    ?>
</body>

</html>