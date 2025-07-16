<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber uma string e exibir a quantidade de vogais</title>
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


            $totalVogais = 0;
            $vogais = array(
                1 => "a",
                2 => "e",
                3 => "i",
                4 => "o",
                5 => "u",
                6 => "A",
                7 => "E",
                8 => "I",
                9 => "O",
                10 => "U",
            );
            
            for($i = strlen($palavra) - 1; $i >= 0; $i--){
                for($j = 1; $j <= 10; $j++){
                    if($palavra[$i] == $vogais[$j]){
                        $totalVogais += 1;
                    };
                };
                
            };
            echo "A quanridade de vogais é $totalVogais";

        };
    };


    ?>

</body>

</html>