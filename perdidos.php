<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adocao.css">
    <link rel="stylesheet" href="header.css">
    <title>Document</title>
</head>
<body>

<?php 
    session_start();
    if(!isset($_SESSION['id'])){
        require 'php/conexao.php';
        include('header.php');
    } else {
        include('headerlogado.php');
    }
?>
    <section class="um">
        <div class="topo">
            <h1> Animais Perdidos</h1>
            <a href="cperdidos.php"><p class="cadastrar">Perdeu seu animal? Publique aqui</p></a>
        </div>
        <div class="container">
            <?php
        
        $animais = selectAllAnimals("Perdido");
        $quantidade = quantidadeAnimais("Perdido");
        $quantidadeinicial = quantidadeAnimais("Perdido");
            foreach ($animais as $a){
            $path = path($a['path']);
            $iduser = selectUser($a['cod_user']);
            $iduser = $iduser['user_id'];
            $idani = $a['ani_id'];
            $firstname = firstname($iduser);
            
            if($quantidadeinicial != $quantidade) {
                $a = next($animais);
                $path = path($a['path']);
                $iduser= selectUser($a['cod_user']);
                $iduser = $iduser['user_id'];
                $firstname = firstname($iduser);
            }
        ?>
        <div class="frs">
                <div class="bloco">
                    <div class="user">
                        <span style="font-weight: bold">Usúario Responsável: </span> <?php echo "<span>" . $firstname . "</span>"; ?>
                    </div>
                    <div class="imgpet">
                        <?php echo '<img src="' . $path . '"' . 'alt=""' ?>
                        <!-- <img src="animals/c2.jpeg" alt=""> -->
                    </div>
                    <div class="details">
                        <span style="font-weight: bold">Espécie:</span> <?php echo "<span>" . $a['especie'] . "</span>"; ?> <br>
                        <span style="font-weight: bold">Sexo:</span> <?php echo "<span>" . $a['sexo'] . "</span>"; ?> <br>
                        <div class="ult">
                            <div class="span">
                                <span style="font-weight: bold">Porte:</span> <?php echo "<span>" . $a['porte'] . "</span>"; ?>
                            </div>
                            <a href=<?php echo "perdido.php?id=" . $a['ani_id'] ?> ><p class="adote">Entrar em contato ></p></a>
                        </div>
                    </div>
                </div>   

                <?php 
                    $a = next($animais);
                    $path = path($a['path']);
                    $iduser= selectUser($a['cod_user']);
                    $iduser = $iduser['user_id'];
                    $firstname = firstname($iduser);
                     ?>

                <div class="bloco">
                    <div class="user">
                        <span style="font-weight: bold">Usúario Responsável:</span> <?php echo "<span>" . $firstname . "</span>"; ?>
                    </div>
                    <div class="imgpet">
                        <?php echo '<img src="' . $path . '"' . 'alt=""' ?>
                        <!-- <img src="animals/c2.jpeg" alt=""> -->
                    </div>
                    <div class="details">
                    <span style="font-weight: bold">Espécie:</span> <?php echo "<span>" . $a['especie'] . "</span>"; ?> <br>
                        <span style="font-weight: bold">Sexo:</span> <?php echo "<span>" . $a['sexo'] . "</span>"; ?> <br>
                        <div class="ult">
                            <div class="span">
                                <span style="font-weight: bold">Porte:</span> <?php echo "<span>" . $a['porte'] . "</span>"; ?>
                            </div>
                            <a href=<?php echo "perdido.php?id=" . $a['ani_id'] ?> ><p class="adote">Entrar em contato ></p></a>
                        </div>
                    </div>
                </div>   
                
            </div>
        <?php  
        
            if($quantidade == 3){ 
                $a = next($animais);
                $path = path($a['path']);
                $iduser= selectUser($a['cod_user']);
                $iduser = $iduser['user_id'];
                $firstname = firstname($iduser);
                ?>
                <div class="frs">
                    <div class="bloco">
                        <div class="user">
                            <span style="font-weight: bold">Usúario Responsável:</span> <?php echo "<span>" . $firstname . "</span>"; ?>
                        </div>
                        <div class="imgpet">
                        <?php echo '<img src="' . $path . '"' . 'alt=""' ?>
                            <!-- <img src="uploads/63911b0040fc0.jpeg" alt=""> -->
                            <!-- <img src="animals/c2.jpeg" alt=""> -->
                        </div>
                        <div class="details">
                        <span style="font-weight: bold">Espécie:</span> <?php echo "<span>" . $a['especie'] . "</span>"; ?> <br>
                            <span style="font-weight: bold">Sexo:</span> <?php echo "<span>" . $a['sexo'] . "</span>"; ?> <br>
                            <div class="ult">
                                <div class="span">
                                    <span style="font-weight: bold">Porte:</span> <?php echo "<span>" . $a['porte'] . "</span>"; ?>
                                </div>
                                <a href=<?php echo "perdido.php?id=" . $a['ani_id'] ?> ><p class="adote">Entrar em contato ></p></a>
                            </div>
                        </div>
                    </div>   
                </div>   
            
            <?php
                break;    
                }
                if($quantidade == 2){
                    break;
                }
                
            $quantidade = $quantidade - 2;
        }
        ?>
        
        
    
        
        
        
        
<!--         
            <div class="frs">
                <div class="bloco">
                    <div class="user"> -->
                        <!-- <span style="font-weight: bold">Usúario Responsável:</span> <span>Lucas</span>
                    </div>
                    <div class="imgpet">
                        <img src="animals/c1.jpeg" alt="">
                    </div> -->
                    <!-- <div class="details"> -->
                        <!-- <span style="font-weight: bold">Espécie:</span> <span>Cachorro</span> <br>
                        <span style="font-weight: bold">Sexo:</span> <span>Macho</span> <br>
                        <div class="ult">
                            <div class="span">
                                <span style="font-weight: bold">Porte:</span> <span>Pequeno</span> 
                            </div>
                            <a href=""><p class="adote">Entrar em contato ></p></a>
                        </div>
                    </div>
                </div>   
                <div class="bloco">
                    <div class="user">
                        <span style="font-weight: bold">Usúario Responsável:</span> <span>Nicolas</span>
                    </div>
                    <div class="imgpet">
                        <img src="animals/c2.jpeg" alt="">
                    </div>
                    <div class="details">
                        <span style="font-weight: bold">Espécie:</span> <span>Cachorro</span> <br>
                        <span style="font-weight: bold">Sexo:</span> <span>Macho</span> <br>
                        <div class="ult">
                            <div class="span">
                                <span style="font-weight: bold">Porte:</span> <span>Médio</span> 
                            </div>
                            <a href=""><p class="adote">Entrar em contato ></p></a>
                        </div>
                    </div>
                </div>    
                
            </div>
            
           
             -->














            
        </div>
        
        
        
    </section>

</body>
</html>