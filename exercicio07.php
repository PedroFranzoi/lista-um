<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar se o número é perfeito</title>
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

            $divisores = 0;
            for ($i = 1; $i < $numero; $i++) {
                if ($numero %$i == 0) {
                    $divisores += $i;
                };
            };
            if ($divisores == $numero) {
                echo "O número é perfeito";
            } else {
                echo "O número não é perfeito";
            };
        };
    };

    ?>

</body>

</html>