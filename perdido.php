<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adotar.css">
    <link rel="stylesheet" href="header.css">
    <title>Document</title>
</head>
<body>
    <?php 
    session_start();
    if(!isset($_SESSION['id'])){
        require('php/conexao.php');
        include('header.php');
    } else {
        include('headerlogado.php');
    }
    $idani = $_GET['id'];
    $animal = selectAnimalFromId($idani);
    $path = path($animal['path']);
    $user = selectUser($animal['cod_user']);
    $explode = explode(" ", $user['nome']);
    $firstname = $explode[0];
    ?>

<main>
    <a href="perdidos.php"><img src="images/back.png" alt="back" class="back"></a>
    <div class="main">
        <div class="container">
            <div class="foto"><img src="<?= $path ?>" alt=""></div>
            <div class="informacoes">
                <p class="strong">Sobre o animal</p>
                <span style="font-weight: bold">Espécie:</span> <span> <?= $animal['especie']; ?> </span> <br>
                <span style="font-weight: bold">Sexo:</span> <span> <?= $animal['sexo']; ?> </span> <br>
                <span style="font-weight: bold">Porte:</span> <span> <?= $animal['porte']; ?> </span> <br>
                <hr>
                <p class="strong">Informações para contato</p>
                <span style="font-weight: bold">Nome do responsável:</span> <span> <?= $firstname ?> </span> <br>
                <span style="font-weight: bold">Telefone:</span> <span> <?= $animal['telefone']; ?> </span> 
            </div>
        </div>
        <div class="caixa-texto">
        <p class="strong" style="margin-top:4px; font-size: 1.7rem;">Descrição</p>    
        <p style="margin-top:6px;"> <?= $animal['descricao']; ?> </p>
        </div>
    </div>


</main>
        
</body>
</html>