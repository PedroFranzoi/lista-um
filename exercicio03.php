<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Informar se um número é positivo, negativo ou zero</title>
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
            $numero = $_POST['numero'];

            if($numero > 0 && $numero != 0){
                echo "O número é positivo.";
            };
            if($numero < 0 && $numero != 0){
                echo "O número é negativo.";
            };
            if($numero == 0){
                echo "O número é zero.";
            };
        };
    };

    ?>

</body>

</html>