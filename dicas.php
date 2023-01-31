<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dicas.css">
    <link rel="stylesheet" href="header.css">
    <title>Document</title>
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

<main>
    <div class="main">
        <h2>Adoção responsável</h2>
        <div class="container">
            <p class="user">Para levar um gato ou um cachorro para casa é preciso pensar muito bem antes.
                Isso porque não basta ter a intenção de adotar, é preciso que o tutor se comprometa
                com uma série de responsabilidades, que garantirão a qualidade de vida e o bem-estar dos pets.
                A adoção responsável inclui a tomada de medidas e precauções com uma nova vida. 
                É necessário ter consciência de que os animais vivem por longos anos e que demandam
                 tempo para brincadeiras e passeios, além de cuidados com a saúde e a higiene. </p>
            <p class="strong">Por isso, é importante levar alguns fatores em consideração, como:</p>
            <div class="num"><span class="strong">1. Expectativa de vida do pet:</span> <span class="user">Adotar um animal de estimação
                é um ato que requer planejamento em longo prazo, já que cães e gatos podem viver bastante tempo, cerca de 15 anos.</span>
            </div>
            <div class="num"><span class="strong">2. Espaço Adequado:</span> <span class="user">É importante que os pets
                tenham espaço suficiente para viver e brincar. A necessidade varia conforme o porte do animal, por exemplo.
                Além disso, no caso de gatos, é importante instalar telas de proteção nas janelas.</span>
            </div>
            <div class="num"><span class="strong">3. Saúde do pet:</span> <span class="user">Levar o pet para consultas veterinárias 
                periódicas é crucial, além de arcar com os custos de vacinação, vermifugação e medicamentos que o animal possa precisar. Além disso,
            a castração é fundamental para o controle da taxa de natalidade dos pets e aumentar a expectativa de vida  </span>
            </div>
        </div> 
    </div>
</main>
        
</body>
</html>