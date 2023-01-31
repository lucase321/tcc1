<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/50f0d0a0bd.js" crossorigin="anonymous"></script>
    <title>Página</title>
</head>
<body>
    
    <?php 
    session_start();
    if(!isset($_SESSION['id'])){
        include('header.php');
    } else {
        include('headerlogado.php');
    }

    
    ?>
    
    <section class="main">
            <div class="slide">
                <img src="images/0.jpg" alt="" class="image">
                <div class="image-data">
                    <span class="text">Adotar é um ato de amor</span>
                    <h2>De um lar para um bichinho que<br> precisa de carinho</h2>
                    <a href="adocao.php" class="button">Adote já</a>
                </div>
            </div>
    </section>

    <section class="um">
        <div class="p"><p>Mais</p></div>
        <div class="container">
            <div class="frs">
                <div class="bloco clicar" id="um" onclick="adotar()">
                    <!-- <img src="images/1.jpg" alt=""> -->
                    <div class="bloco-data">
                        <h3>Animais para adoção</h3>
                        <p>Veja os animais disponíveis para adoção ou publique</p>
                        <a href="adocao.php" class="button">Acesse</a>
                    </div>
                </div>
                
                <div class="bloco clicar" id="dois" onclick="encontrados()">
                    <!-- <img src="images/2.jpg" alt=""> -->
                    <div class="bloco-data">
                        <h3>Animais encontrados</h3>
                        <p>Veja os animais encontrados ou publique</p>
                        <a href="encontrados.php" class="button">Acesse</a>
                    </div>
                </div>
            </div>
            
            <div class="sec">
                <div class="bloco clicar" id="tres" onclick="perdidos()">
                    <!-- <img src="images/3.jpg" alt=""> -->
                    <div class="bloco-data">
                        <h3>Animais perdidos</h3>
                        <p>Veja os animais perdidos ou publique caso tenha perdido</p>
                        <a href="perdidos.php" class="button">Acesse</a>
                    </div>
                </div>
                <div class="bloco clicar" id="quatro" onclick="dicas()">
                    <!-- <img src="images/4.jpg" alt=""> -->
                    <div class="bloco-data">
                        <h3>Veja antes de adotar</h3>
                        <p>Veja as recomendações antes de adotar um animal</p>
                        <a href="dicas.php" class="button">Acesse</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
    
    
    
    
    
    
    <script>
    function adotar(){
    window.location = "adocao.php";
    }
    function encontrados(){
    window.location = "encontrados.php";
    }
    function perdidos(){
    window.location = "perdidos.php";
    }
    function dicas(){
    window.location = "dicas.php";
    }
    </script>

<script type="text/javascript" src="script.js"></script>
</body>
</html>