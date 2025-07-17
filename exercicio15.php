<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IMC a partir do peso e altura e exibir a categoria</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite sua altura em cm.</label>
        <input type="number" id="numero" name="numero">
        <label for="numero2">Digite seu peso em Kg.</label>
        <input type="number" id="numero2" name="numero2">
        <button type="submit" name="verificar">Verificar</button>
    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['verificar'])){
            $altura = $_POST['numero'];
            $peso = $_POST['numero2'];

            $altura = $altura/100;

            $imc = $peso / pow($altura, 2);

            
                if($imc <= 18.5){
                    echo "Você está magro.";
                };
                if($imc > 18.5 && $imc <= 24.9){
                    echo "Você está no peso normal.";
                };
                if($imc > 25 && $imc <= 29.9){
                    echo "Você está sobrepeso.";
                };
                if($imc > 30 && $imc <= 34.9){
                    echo "Você está obeso grau I.";
                };
                if($imc > 35 && $imc <= 39.9){
                    echo "Você está obeso grau II.";
                };
                if($imc >= 40){
                    echo "Você está obeso grau III.";
                };
            };



        };

    ?>
    
</body>
</html>