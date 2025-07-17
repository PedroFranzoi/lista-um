<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber uma data (dia, mês, ano) e validar se é uma data válida</title>
</head>
<body>
    <form method="POST" action="">
        <label for="dia">Digite um dia.</label>
        <input type="number" id="dia" name="dia">
        <label for="mes">Digite um mês.</label>
        <input type="number" id="mes" name="mes">
        <label for="ano">Digite um ano.</label>
        <input type="number" id="ano" name="ano">
        <button type="submit" name="verificar">Verificar</button>
    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['verificar'])){
            $dia = $_POST['dia'];
            $mes = $_POST['mes'];
            $ano = $_POST['ano'];

            if($ano > 0){
                $valido = true;
                if($mes > 0 && $mes <= 12){
                    $valido = true;
                    if($dia > 0 && $dia <= 31){
                        $valido = true;
                    }else{
                        $valido = false;
                    };
                }else{
                    $valido = false;
                    };
            }else{
                $valido = false;
                };

            if($mes %2 == 0 && $mes !== 2 && $dia > 30){
                $valido = false;
            };

            if($mes == 2 && $ano %4 !== 0 && $dia <= 29){
                $valido = false;
            };

            if($valido == true){
                echo "A data é valida";
            }else{
                echo "A data não é valida";
            };

        };
    };
    ?>
    
</body>
</html>