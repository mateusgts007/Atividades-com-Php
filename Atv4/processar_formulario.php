<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    include 'Animal.php';

    if(!empty($_POST['nome']) && !empty($_POST['idade']) && !empty($_POST['raca']) && !empty($_POST['cor']) && !empty($_POST['tamanho'])){
        
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $raca = $_POST['raca'];
        $cor = $_POST['cor'];
        $tamanho = $_POST['tamanho'];

        $animal = new gato($nome,$idade, $raca, $cor, $tamanho);
        
        echo " <h2>Informações do gatito: </h2> ";

        $animal ->exibirDados(); 

    }
    
    ?>  

   <button>  <a href="index.php" > Home</a> </button> 
</body>
</html>

