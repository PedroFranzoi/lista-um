<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar se um ano é bissexto</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite um ano</label>
        <input type="number" id="numero" name="numero">
        <button type="submit" name="verificar">Verificar</button>
    </form>    

    <?php
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['verificar'])){
            $numero = $_POST['numero'];


            if($numero %4 == 0){
                echo "O ano é bissexto.";
            }else{
                echo "O ano não é bissexto.";
            };


        };
    };

    ?>


</body>
</html>