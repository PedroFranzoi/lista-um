<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber nome e idade e informar se a pessoa pode votar</title>
</head>
<body>
     <form method="POST" action="">
        <label for="nome">Digite seu nome.</label>
        <input type="text" id="nome" name="nome">
        <label for="numero">Digite sua idade.</label>
        <input type="number" id="idade" name="idade">
        <button type="submit" name="verificar">Verificar</button>
    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['verificar'])){
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];

            if($idade >= 16){
                echo "$nome, você pode votar.";
            }else{
                 echo "$nome, você não pode votar.";
            };


        };
    };
    ?>
    
</body>
</html>