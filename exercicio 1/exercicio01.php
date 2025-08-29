<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - Par ou Ímpar</title>
</head>

<body>
    <form action="" method="post">
        <label for="numero">Digite um número: </label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar-par-impar">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['verificar-par-impar'])) {
            $numero = $_POST['numero'];

            
                if ($numero % 2 == 0) {
                    echo "O número $numero é <strong>par</strong>.;
                } else {
                    echo "O número $numero é <strong> Ímpar </strong>.";
                }
            } 
            
        }
    }
    ?>
</body>

</html>