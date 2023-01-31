<?php
require 'conexao.php';
session_start();
$user = selectUser($_SESSION['id']);
$id = $user['user_id'];

$especie = $_POST['especie'];
$sexo = $_POST['sexo'];
$tamanho = $_POST['tamanho'];
$vacinado = $_POST['vacinado'];
$castrado = $_POST['castrado'];
$descricao = $conn->real_escape_string($_POST['descricao']);
$telefone = $conn->real_escape_string($_POST['telefone']);

if($especie == 1) {
    $especie = "Cachorro";
} else if($especie == 2) {
    $especie = "Gato";
}

if($sexo == 1) {
    $sexo = "Macho";
} else if($sexo == 2) {
    $sexo = "Femêa";
}

if($tamanho == 1) {
    $tamanho = "Grande";
} else if($tamanho == 2) {
    $tamanho = "Médio";
} else if($tamanho == 3) {
    $tamanho = "Pequeno";
}

if($vacinado == 1) {
    $vacinado = "Sim";
} else if($vacinado == 2) {
    $vacinado = "Não";
} else {
    $vacinado = "Sem informação";
}

if($castrado == 1) {
    $castrado = "Sim";
} else if($castrado == 2) {
    $castrado = "Não";
} else{
    $castrado = "Sem informação";
}


if(isset($_FILES['imagem'])){
    $arquivo = $_FILES['imagem'];
    
    if($arquivo['error']){
        $_SESSION['erro'] = "Falha ao enviar arquivo";
        header('location:../cadocao.php');
        die;
    }
    
    if($arquivo['size'] > 2097152){
        $_SESSION['tamanho'] = "Arquivo muito grande. Máximo 2MB";
        header('location:../cadocao.php');
        die();
    }
    $pasta = "../uploads/";
    $nomearquivo = $arquivo['name'];
    $novonome = uniqid();
    $extensao = strtolower(pathinfo($nomearquivo, PATHINFO_EXTENSION));

    if($extensao != "jpg" && $extensao != "png" && $extensao != "jpeg"){
        $_SESSION['tipo'] = "Tipo de arquivo não aceito";
        header('location:../cadocao.php');
        die;    
    }

    $path = $pasta . $novonome . "." . $extensao;
    $move = move_uploaded_file($arquivo["tmp_name"], $path);
    if($move){
        $query_insert = "INSERT INTO animal (path, especie, sexo, porte, vacinado, castrado, descricao, telefone, tipo, cod_user)
         values ('$path', '$especie', '$sexo', '$tamanho', '$vacinado', '$castrado', '$descricao', '$telefone', 'Adoção', $id)";
        }
        $insert = mysqli_query($conn, $query_insert);
        if($insert){
            header('location:../adocao.php');
        } else{
            $_SESSION['erro'];
            header('location:../cadocao.php');
        }
    }








// var_dump($especie);
// var_dump($sexo);
// var_dump($tamanho);
// var_dump($vacinado);
// var_dump($castrado);
// var_dump($descricao);
// var_dump($telefone);


// INSERT INTO animal (ani_id,	path, especie, sexo, porte,	vacinado,	castrado,	descricao,	telefone, tipo,	cod_user);






// if ($insert) {
//     var_dump($emarray);
//     // header('Location:/PRO V1/index.php');
// }
