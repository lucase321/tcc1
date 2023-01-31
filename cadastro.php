<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <link rel="stylesheet" href="header.css">
    <title>Document</title>
</head>
<body>

<section class="main">
    <div class="slide">
            <div class="box redd">
                <form action="php/cadastro.php" method="POST" class="bluee">
                    <h1>Cadastro</h1>
                    <p class="user">Nome</p><input type="text" name ="nome" placeholder="Digite seu nome" required>
                    <p class="user">Email</p><input type="text" name ="email" placeholder="Digite seu email" required>
                    <?php 
                    session_start();
                    if(isset($_SESSION['eigual'])){
                        echo "<p class='erro'>Email já cadastrado</p>";
                        session_unset();
                    }

                    ?>
                    <p class="user">Senha</p><input type="password" name ="senha" placeholder="Digite sua senha" required>
                    <p class="user">Telefone</p><input type="text" name ="telefone" placeholder="Digite seu telefone" required>             
                    <button type="submit">Cadastro</button>
                    <p class="pa">Ja tem uma conta? <a href="login.php">Entre</a> </p>
                </form>
            </div>
    </div>
</section>

</body>
</html>