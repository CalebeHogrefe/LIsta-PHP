<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Número Amigo</title>
</head>
<body>
    <form method="POST">
        <label> Digite o primeiro Número:</label>
        <input type="number"> name="num1" <required><br><br>

         <label> Digite o segundo Número:</label>
        <input type="number"> name="num2" <required><br><br>

        <button type="submit" name="verificar">Enviar</button>
    </form>


    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST['verificar'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
              

            }
        }
        ?>
                   

               
</body>
</html>