<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="eventos.css">
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

    ?>

<main>
    <!-- <a href="index.php"><img src="images/back.png" alt="back" class="back"></a> -->
    <div class="main">
        <!-- <div class="container">
            <div class="foto"><img src="https://i0.wp.com/cdn-portalveganismo.surtando.com.br/2015/09/caminhada-animal-defendera-adocao-de-animais-em-taubate-ONG-CAMALEAO-vereador-douglas-carbonne-vida-taubate-caopanheiros-ong-sabe-vale-do-paraiba.jpg" alt=""></div>
            <div class="informacoes">
                <span class="strong">Sobre o evento</span> <br>
                <span style="font-weight: bold">Descrição:</span> <span>  Feira de adoção </span> <br>  
                <span style="font-weight: bold">Cidade:</span> <span>  Taubaté </span> <br>      
                <span style="font-weight: bold">Local:</span> <span> Praça Monsenhor Silva Barros </span> <br>
                <span style="font-weight: bold">Data:</span> <span> 03/10/2022  </span> <br>
                <span style="font-weight: bold">Horário:</span> <span> 9:30 </span> <br>
                <hr>
                <span class="strong">Informações para contato</span>
                <span style="font-weight: bold">Nome do responsável:</span> <span>  </span> <br>
                <span style="font-weight: bold">Telefone:</span> <span>  </span>  
            </div>
        </div> -->
        <div class="container">
            <div class="foto"><img src="https://www.siqueiracampos.pr.gov.br/public/admin/globalarq/uploads/files/Meio%20Ambiente/feira.png" alt=""></div>
            <div class="informacoes">
                <span class="strong">Sobre o evento</span> <br>
                <span style="font-weight: bold">Descrição:</span> <span>  Feira de adoção </span> <br> 
                <span style="font-weight: bold">Cidade:</span> <span>  Siqueira Campos </span> <br>     
                <span style="font-weight: bold">Local:</span> <span> Praça Matriz </span> <br>
                <span style="font-weight: bold">Data:</span> <span> 09/09 e 10/09  </span> <br>
                <span style="font-weight: bold">Horário:</span> <span> 17h às 22h e 09h às 14h</span> <br>
                <!-- <hr>
                <span class="strong">Informações para contato</span>
                <span style="font-weight: bold">Nome do responsável:</span> <span>  </span> <br>
                <span style="font-weight: bold">Telefone:</span> <span>  </span>  -->
            </div>
        </div>
    </div>


</main>
        
</body>
</html>