   <!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="Verificar se o número é perfeito">Verificar</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];
            $soma = 0;
            
            for ($i = 1; $i < $numero; $i++) {
                if ($numero % $i == 0)
   
                }

            }
        }

    ?>
</body>

</html>
   
   
   
   
   
   
   
  