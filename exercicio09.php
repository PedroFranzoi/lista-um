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
        <label for="numero">Digite outro número:</label>
        <input type="number" id="numero2" name="numero2" required>
        <button type="submit" name="verificar">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['verificar'])) {
            $numero = $_POST['numero'];
            $numero2 = $_POST['numero2'];

            $total = 0;
            if($numero >= $numero2){
                for($i = $numero2; $i <= $numero; $i++){
                    $total += $i;
                };
            };

            if($numero2 > $numero){
                for($i = $numero; $i <= $numero2; $i++){
                    $total += $i;
                };
            };

            echo "A soma de todos os números entre $numero e $numero2 é $total.";
        
        };
    };

    ?>

</body>

</html>