<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade2</title>
</head>
<body>

    <?php

    $populacaoA = 80000;
    $crescmentoAnualA = $populacaoA * 0.03;
    
    $populacaoB = 200000;
    $crescmentoAnualB = $populacaoB * 0.015;

        for($anos = 0; $populacaoA < $populacaoB; $anos++){
            $populacaoA += $populacaoA *0.03;
            $populacaoB += $populacaoB * 0.015;
        }

        echo "A quantidade de anos necessario para a população A passar a popoulação B é de:" . $anos;

        ?>


</body>

</html>