<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar quantos números pares existem entre 1 e o número informado</title>
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

            $totalPares = 0;
            for($i = 1; $i <= $numero; $i++){
                if($i %2 == 0){
                    $totalPares += 1;
                };
            };   

            echo "Existem $totalPares números entre 1 e $numero.";
        
        };
    };

    ?>

</body>

</html>