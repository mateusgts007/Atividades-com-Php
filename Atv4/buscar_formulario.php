<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Gato</title>
    <style>
        body {
            background-color: moccasin;
            font-family: Arial, Helvetica, sans-serif;
            margin: 20px;
        }
        form {
            font-family: 'Courier New', Courier, monospace;
            margin: 20px;
            color: blue;
        }
    </style>
</head>
<body>

    <form action="" method="get">
        <label for="nome"> Nome do gatito: </label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <input type="submit" value="Consultar">
    </form>
    
    <?php

    if (isset($_GET['nome'])) { /// tá verificando s eo nome foi enviado
        $nome = $_GET['nome'];

        
        if (isset($_SESSION['gato'])) {
            $gato = $_SESSION['gato'][$nome];

            echo "<h2>Dados do Gatito</h2>";
            
            echo "Nome: " . htmlspecialchars($gato['nome']) . "<br>";
            echo "Idade: " . htmlspecialchars($gato['idade']) . "<br>";
            echo "Raça: " . htmlspecialchars($gato['raca']) . "<br>";
            echo "Cor: " . htmlspecialchars($gato['cor']) . "<br>";
            echo "Tamanho: " . htmlspecialchars($gato['tamanho']) . "<br>";
        } else {
            echo "<p>Gato não encontrado.</p>";
        }
    }
    ?>

    <button><a href="index.php">Home</a></button> 

</body>
</html>
