    <!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['verificar'])) {
            $numero = ($_POST['numero']);
            $contadorPares = 0;

            for ($i = 1; $i <= $numero; $i++) {
                if ($i % 2 == 0) {
                    $contadorPares++;
                }
            }

            echo "Existem $contadorPares números pares entre 1 e $numero.";
        }
    }
    
    
    ?>
</body>

</html>
    
    
    
    
    
    
    
              