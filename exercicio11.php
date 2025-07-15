<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar se uma palavra é um palíndromo</title>
</head>

<body>
    <form method="POST" action="">
        <label for="palavra">Digite uma palavra:</label>
        <input type="text" id="palavra" name="palavra" required>
        <button type="submit" name="verificar">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['verificar'])) {
            $palavra = $_POST['palavra'];


            if(strrev($palavra) == $palavra){
                echo "A palavra $palavra é um palindromo";
            }else{
                echo "A palavra $palavra não é um palindromo";
            };

        };
    };


    ?>

</body>

</html>