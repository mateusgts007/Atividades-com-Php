<?php
include 'gato.php';
include 'passarinho.php';

$tipoAnimal = $_GET['tipoAnimal'];
$nome = $_GET['nome'];
$idade = $_GET['idade'];

if ($tipoAnimal == 'gato') {
    $corPelagem = $_GET['corPelagem'];
    $animal = new Gato($nome, $idade, $corPelagem);
} elseif ($tipoAnimal == 'passarinho') {
    $tipoCanto = $_GET['tipoCanto'];
    $animal = new Passarinho($nome, $idade, $tipoCanto);
}

echo $animal->getDescricao();
?>
