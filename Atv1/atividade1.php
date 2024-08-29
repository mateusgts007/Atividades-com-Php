<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
    
</head>
<body>

<img src="OIP.jpeg" alt="20px">

<div class="container">

        <h1>Hora da taxação</h1>
        <form method="get" action="">
            <label for="salarioPorHora">Informe seu ganho por hora:</label>
            <input type="number" id="salarioPorHora" name="salarioPorHora" required>
            <br>
            <br>
            <label for="horasTrabalhadas"> Informe suas horas trabalhadas:</label>
            <input type="number" id="horasTrabalhadas" name="horasTrabalhadas" required>
            <br>
            <button type="submit"> Calcular</button>


        </form>

        <?php
    // Verifica se o parâmetro 'nome' foi passado pela URL
    if (isset($_GET['salarioPorHora']) && ($_GET['horasTrabalhadas'])) {
        
        $salarioPorHora = $_GET['salarioPorHora'];
        $horasTrabalhadas = $_GET['horasTrabalhadas'];

        $salarioBruto = $salarioPorHora * $horasTrabalhadas;
        $ImpostoRenda = $salarioBruto * 0.11;
        $Inss = $salarioBruto * 0.08;
        $sindicato = $salarioBruto * 0.05;


        echo "Seu salário bruto: R$ " . number_format($salarioBruto, 2, ',', '.') . "<br>";
        echo "Imposto de Renda: R$ " . number_format($ImpostoRenda, 2, ',', '.') . "<br>";
        echo "INSS: R$ " . number_format($Inss, 2, ',', '.') . "<br>";
        echo "Contribuição Sindical: R$ " . number_format($sindicato, 2, ',', '.');
    } else {

    echo "Por favor, preencha todos os campos.";
    }


        ?>

    

</body>
</html>