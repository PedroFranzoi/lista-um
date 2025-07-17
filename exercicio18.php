<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber 3 números e informar qual é o maior</title>
</head>
<body>

<form method="POST" action="">
        <label for="numero1">Digite um número.</label>
        <input type="number" id="numero1" name="numero1">
        <label for="numero2">Digite outro número.</label>
        <input type="number" id="numero2" name="numero2">
        <label for="numero3">Digite mais um número.</label>
        <input type="number" id="numero3" name="numero3">
        <button type="submit" name="verificar">Verificar</button>
    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['verificar'])){
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $numero3 = $_POST['numero3'];

            $maior = 0;
            if($numero1 > $numero2 && $numero1 > $numero3){
                $maior = $numero1;
            };
            if($numero2 > $numero1 && $numero2 > $numero3){
                $maior = $numero2;
            };
            if($numero3 > $numero1 && $numero3 > $numero2){
                $maior = $numero3;
            };
            
            echo "O maior número é $maior";

        };
    };
    ?>
    
</body>
</html>