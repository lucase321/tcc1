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
            <div class="editar">
                <a href="contaeditar.php?id=<?= $user['user_id'] ?>"><p class="texted">Editar Perfil</p></a>
                <a href="contaeditar.php?id=<?= $user['user_id'] ?>"><img class="edit" src="https://cdn-icons-png.flaticon.com/128/6269/6269505.png" alt=""></a>
            </div>
            <form action="php/cadocao.php" method="POST" class="bluee" enctype="multipart/form-data">
                <p class="user">Nome</p><input type="text" name ="nome" disabled maxlength="70" value="<?= $user['nome'] ?>">
                <p class="user">Telefone</p><input type="text" name ="telefone" disabled maxlength="25" value="<?= $user['telefone'] ?>">
                <p class="user">Email</p><input type="text" name ="email" disabled maxlength="125" value="<?= $user['email'] ?>">
                <?php 
                if(isset($_SESSION['email'])){
                echo '<p class="user" style="text-align: center; color:red; width: 100%;">Email já cadastrado</p>';
                unset($_SESSION['email']);
                }
                ?>
                <!-- <button type="submit">Enviar</button> -->
            </form>
        </div>
        <div class="animais">
            <h2>Suas publicações</h2>
            <?php
            $quantidade = quantidadeAnimaisFromUser($user_id);
            if($quantidade == 0){
                echo '<p class="user" style="text-align:center;">Você ainda não publicou nenhum animal</p>';
                die;
            } else {
            $animais = selectAnimalFromUser($user_id);
            foreach ($animais as $a){
            $path = path($a['path']);
            $iduser = selectUser($a['cod_user']);
            $iduser = $iduser['user_id'];
            $idani = $a['ani_id'];
            $firstname = firstname($iduser); 
            if ($a['tipo'] == "Encontrado"){
                $pagina = "encontrado";
            } else if ($a['tipo'] == "Perdido") {
                $pagina = "perdido";
            } else {
                $pagina = "adotar";
            }
            ?>
            <div class="bloco">
                    <div class="imgpet">
                        <?php echo '<img src="' . $path . '"' . 'alt=""' ?>
                        <!-- <img src="animals/c2.jpeg" alt=""> -->
                    </div>
                    <div class="details">
                        <span style="font-weight: bold">Espécie:</span> <?php echo "<span>" . $a['especie'] . "</span>"; ?> <br>
                        <span style="font-weight: bold">Sexo:</span> <?php echo "<span>" . $a['sexo'] . "</span>"; ?> <br>
                        <div class="ult">
                            <div class="span"> 
                                <span style="font-weight: bold">Porte:</span> <?php echo "<span>" . $a['porte'] . "</span>"; ?> <br>
                                <span style="font-weight: bold">Tipo:</span> <?php echo "<span>" . $a['tipo'] . "</span>"; ?> <br>
                            </div>
                            <div class="column">
                                <a href=<?php echo "$pagina.php?id=" . $a['ani_id'] ?> ><p class="adote">Ver ></p></a>
                                <a href=<?php echo "php/excluirani.php?id=" . $a['ani_id'] ?> ><p class="adote" style="color: red;">Excluir</p></a>
                            </div>
                        </div>
                    </div>
                </div>  
                <?php } 
                        }   ?>
        </div>
    </div>
</main>
        
</body>
</html>