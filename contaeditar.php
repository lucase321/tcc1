<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="conta.css">
    <link rel="stylesheet" href="header.css">
    <title>Document</title>
</head>
<body>
    <?php 
    session_start();
    if(!isset($_SESSION['id'])){
        header('location:index.php');
    } else {
        include('headerlogado.php');
    }
    
    $user_id = $_GET['id'];
    if($_SESSION['id'] != $user_id){
        header('location:index.php');
    }
    
    $user = selectUser($user_id);
    ?>

<main>
    <div class="main">
        <h2>Perfil</h2>
        <div class="container">
            <form action="php/atualizar.php?id=<?=$user_id?>" method="POST" class="bluee" enctype="multipart/form-data">
                <p class="user" style="margin-top:3rem;">Nome</p><input type="text" name ="nome"  maxlength="70" value="<?= $user['nome'] ?>" id="on">
                <p class="user">Telefone</p><input type="text" name ="telefone"  maxlength="25" value="<?= $user['telefone'] ?>" id="on">
                <p class="user">Email</p><input type="text" name ="email"  maxlength="125" value="<?= $user['email'] ?>" id="on">
                <button type="submit">Editar Perfil</button>
                <!-- <button type="submit">Enviar</button> -->
            </form>
        </div>
    </div>
</main>
        
</body>
</html>