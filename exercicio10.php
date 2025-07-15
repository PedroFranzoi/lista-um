<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber um número e exibir a sequência de Fibonacci até esse número</title>
</head>

<body>
    <form action="" method="POST">
        <label for="number">Somatório de:</label>
        <input type="number" name="number" /><br />
        <input type="submit" name="submit" value="Calcular" />
    </form>

    <?php
    $numero = 0;
    $numero = $_POST['number'];
    echo "O número $numero na sequência de Fibonacci é: " . fibo($numero);

    function fibo($numero)
    {
        if ($numero == 0 || $numero == 1)
            return $numero;
        else
            return (fibo($numero - 1) + fibo($numero - 2));
    }
    ?>

</body>

</html>