<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade 3</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required> <br><br>
        <button type="submit" name="verificar_positivo_negativo_zero">Verificar</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['verificar_positivo_negativo_zero'])) {
            $numero = $_POST['numero'];
            if ($numero > 0) {
                echo "<p>O número $numero é positivo.</p>";
            } else if ($numero < 0) {
                echo "<p>O número $numero é negativo.</p>";
            } else {
                echo "<p>O número é zero.</p>";
            }
        }
    }
    ?>
</body>
</html>