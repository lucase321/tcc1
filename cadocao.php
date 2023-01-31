<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadocao.css">
    <link rel="stylesheet" href="header.css">
    <title>Document</title>
</head>
<body>
    
    <?php 
    include 'php/verifica.php';
    if(!isset($_SESSION['id'])){
        include('header.php');
    } else {
        include('headerlogado.php');
    }

?>

<section class="main">
    <div class="slide">
    <a href="adocao.php"><img src="images/back.png" alt="back" class="back"></a>
        <!-- <img src="0.jpg" alt="" class="image"> -->
            <div class="box redd">
                <h1>Publicar animal para adoção</h1>
                <?php
                if(isset($_SESSION['erro'])){
                    echo "<p class=\"erro\">Erro: ". $_SESSION['erro'] . "</p>";
                    unset($_SESSION["erro"]);
                }
                else if(isset($_SESSION['tamanho'])){
                    echo "<p class=\"erro\">Erro: ". $_SESSION['tamanho'] . "</p>";
                    unset($_SESSION["tamanho"]);
                }
                else if(isset($_SESSION['tipo'])){
                    echo "<p class=\"erro\">Erro: ". $_SESSION['tipo'] . "</p>";
                    unset($_SESSION["tipo"]);
                }

                ?>
                <form action="php/cadocao.php" method="POST" class="bluee" enctype="multipart/form-data">
                    <div class="selects">     
                        
                        <p class="user">Espécie</p>
                        <select name="especie" id="especie">
                            <option value="1">Cachorro</option>
                            <option value="2">Gato</option>
                        </select>
                        
                        <p class="user">Sexo</p>
                        <select name="sexo" id="sexo">
                            <option value="1">Macho</option>
                            <option value="2">Femêa</option>
                        </select>
                        
                        <p class="user">Porte</p>
                        <select name="tamanho" id="tamanho">
                            <option value="1">Grande</option>
                            <option value="2">Médio</option>
                            <option value="3">Pequeno</option>
                        </select>
                        <div class="info">
                            <p class="user">Vacinado?</p>
                            <input type="radio" name="vacinado" value="1"><p class="info-text">Sim</p>
                            <input type="radio" name="vacinado" value="2" class="radio-right"><p class="info-text">Não</p>
                            <p class="user">Castrado?</p>
                            <input type="radio" name="castrado" value="1"><p class="info-text">Sim</p>
                            <input type="radio" name="castrado" value="2" class="radio-right"><p class="info-text">Não</p>
                        </div>
                    </div>
                    <p class="user">Descrição (detalhes, local)</p>
                    <textarea id="descricao" maxlength="308" name="descricao" placeholder="Conte mais sobre o animal"></textarea>           
                    <p class="user">Telefone para contato</p><input type="text" name ="telefone" required maxlength="25" placeholder="Digite seu telefone">
                    <p class="user">Envie uma imagem do animal</p>
                    <div class="infos"><input type="file" name="imagem" required></div>
                    <button type="submit">Enviar</button>
                </form>
            </div>
    </div>
</section>

</body>
</html>