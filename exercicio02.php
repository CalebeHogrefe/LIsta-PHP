<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 -   Calcular a tabuada de um número informado</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verifcar_tabuada">Verificar</button>
    </form>

    <?php 
     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
         if (isset($_POST['verificar_tabuada'])) {
            $numero =($_POST['numero']);

            echo "tabuada do número $numero é: <br>";

            for ($i = 1; $i < 10; $i++) {
                echo " ", $numero * $i , "<br>";
            }
        }
    }

    ?>

</body> 