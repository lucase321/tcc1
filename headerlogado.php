<?php
require 'php/conexao.php';
$user = selectUser($_SESSION['id']);
$explode = explode(" ", $user['nome']);
$firstname = $explode[0];
?>
<header>
<header>
        <div class="menu">   
            <div class="left-menu">
                <a href="index.php"><img src="images/logopreto.png" class="logo" alt=""></a>
            </div>
            <div class="center-menu">
                <ul>
                <li class="nav-item"><a href="adocao.php"><span>Adocão</a></li>
                <li class="nav-item"><a href="perdidos.php"><span>Perdidos</a></li>
                <li class="nav-item"><a href="encontrados.php"><span>Encontrados</a></li>
                <li class="nav-item"><a href="eventos.php"><span>Eventos</a></li>
                <li class="nav-item"><a href="dicas.php"><span>Dicas</a></li>
                </ul>
            </div>


            <div class="righ-menu">
                <div class="infos">
                    <img src="images/login.png" alt="login">
                    <span> <?php echo $firstname ?></span>
                    <img src="images/dropdown.png" alt="dropdown" id="dropdown">
                </div>
                <div class="dropdown-menu">
                    <a href="conta.php?id=<?= $user['user_id']?>">Conta</a>
                    <a href="php/logout.php">Sair</a>
                </div>
            </div>
            
            <div class="mobile-menu-icon">
            <button onclick="menuShow()"><img class="icon" src="images/menu-icon.png" alt=""></button>
            </div>
        </div> 

        <div class="mobile-menu">
            <ul>     
                <li class="nav-item"><a href="adocao.php"><span>Adocão</a></li>
                <li class="nav-item"><a href="perdidos.php"><span>Perdidos</a></li>
                <li class="nav-item"><a href="encontrados.php"><span>Encontrados</a></li>
                <li class="nav-item"><a href="eventos.php"><span>Eventos</a></li>
                <li class="nav-item"><a href="dicas.php"><span>Dicas</a></li>
                <li class="nav-item"><a href="conta.php?id=<?= $user['user_id']?>"><span>Conta</a></li>
                <li class="nav-item"><a href="php/logout.php"><span>Sair</a></li>
            </ul>
        </div>
    
    
    
    <script>
        function menuShow(){
            let menuMobile = document.querySelector('.mobile-menu');
            if(menuMobile.classList.contains('open')) {
                menuMobile.classList.remove('open');
            } else{
                menuMobile.classList.add('open');
            }
        }
        
    </script>
       