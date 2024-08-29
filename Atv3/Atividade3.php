<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade3</title>
</head>
<body>

    <p>informe a porcentagem de crescimento da população A e B:</p>
    
    <form method="POST">


    <label for="CrescimentoA"> Crescimento da população A (%)</label>
    <input type="number" id ="crescimentoA" name="crescimentoA" >

    <br> <br>

    <label for="crescimentoB"> crescimento da população B (%)</label>
    <input type="number" id="crescimentoB" name="crescimentoB">

    <br> <br>
    <input type="submit" value="Calcular">

    </form>

    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $populacaoA = 80000;
        $populacaoB = 200000;
        
        $crescimentoAnualA = (float)$_POST['crescimentoA'] / 100;
        $crescimentoAnualB = (float)$_POST['crescimentoB'] / 100;
    
            for($anos = 0; $populacaoA < $populacaoB; $anos++){
                $populacaoA += $populacaoA *$crescimentoAnualA;
                $populacaoB += $populacaoB * $crescimentoAnualB;
            }
    
            echo "A quantidade de anos necessario para a população A passar a popoulação B é de:" . $anos;
    

    }
    
        ?>


</body>

</html>