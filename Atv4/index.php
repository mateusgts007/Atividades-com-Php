<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
    <style>
        body{
            background-color: moccasin;
            font-family: Arial, Helvetica, sans-serif;
            margin: 20px;
        }   

        form{
            font-family: 'Courier New', Courier, monospace;
            margin: 20px;
            color: blue;
        }
    </style>

</head>

<body>

       
    <?php 

    require_once 'Animal.php'

    ?>

    <form action="processar_formulario.php" method="post">

    <label for="nome"> Nome: </label>
    <br> 
    <input type="nome" id="nome" name="nome" required>
    <br> 
    <br>

    <label for="idade"> Idade: </label>
    <br>
    <input type="idade" id="idade" name="idade" required>
    <br>
    <br>

    <label for="raca"> Raca: </label>
    <br>
    <input type="raca" id="raca" name="raca" required>
    <br>
    <br>

    <label for="cor"> Cor: </label>
    <br>
    <input type="cor" id="cor" name="cor" required>
    <br>
    <br>

    <label for="tamanho"> Tamanho: </label>
    <br>
    <input type="tamanho" id="tamanho" name="tamanho" required>
    <br> <br> <br>

    <button>Enviar</button>
    <br> <br>

    <button>  <a href="buscar_formulario.php" > Buscar</a> </button> 


    </form>

    <img src="cute-group-animals.jpg" height="300" width="400" alt="imagem de gatos">


        
</body>
</html>