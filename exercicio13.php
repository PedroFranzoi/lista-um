<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter graus Celsius para Fahrenheit</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite uma temperatura em Celsius</label>
        <input type="number" id="numero" name="numero">
        <button type="submit" name="verificar">Verificar</button>
    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['verificar'])){
            $numero = $_POST['numero'];

            $valor = 0;

            $valor = ($numero * 9/5) + 32;

            echo $valor;


        };
    };
    
    ?>

</body>
</html>