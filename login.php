<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>


<section class="main">
    <div class="slide">
            <div class="box redd">
                <form action="php/login.php" method="POST" class="bluee">
                    <h1>Login</h1>
                    <p class="user">Email</p><input type="text" name ="email" placeholder="Digite seu email" required>
                    <p class="user">Senha</p><input type="password" name ="senha" placeholder="Digite sua senha" required>
                    <?php 
                    session_start();
                    if(isset($_SESSION['senhae']) || isset($_SESSION['emaile']) ){
                        echo "<p class='erro'>Senha ou email incorretos</p>";
                        session_unset();
                    }

                    ?>
                    <button type="submit">Login</button>
                    <p class="pa">Não tem uma conta? <a href="cadastro.php">Cadastre-se</a> </p>
                    <p class="pa"><a href="index.php">Continuar sem login</a> </p>
                </form>
            </div>
    </div>
</section>

</body>
</html>