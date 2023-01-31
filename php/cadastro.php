<?php
require 'conexao.php';

$nome = $conn->real_escape_string($_POST['nome']);
$email = $conn->real_escape_string(strtolower($_POST['email']));
$senha = $conn->real_escape_string(password_hash($_POST['senha'], PASSWORD_DEFAULT));
$telefone = $conn->real_escape_string($_POST['telefone']);

$query_select = "SELECT email FROM usuario WHERE email = '$email'";
$select = mysqli_query($conn, $query_select);
$array = mysqli_fetch_array($select);
$emarray = $array['email'];

if ($emarray == $email) {
    session_start();
    $_SESSION['eigual'] = '';
    header('location:../cadastro.php');
    die;
} else {

    $query_insert = "INSERT INTO usuario (nome, email, senha, telefone) VALUES ('$nome', '$email','$senha', '$telefone')";
    $insert = mysqli_query($conn, $query_insert);

    if ($insert) {
        $query_id = "SELECT user_id FROM usuario WHERE email = '$email'";
        $id = mysqli_query($conn, $query_id) or die("Falha na execução do código SQL: " . $conn->error);
        $fetch = mysqli_fetch_array($id);
        $idarray = $fetch['user_id'];
        session_start();
        $_SESSION['id'] = $idarray;
        header('Location:../index.php');
        die();
    } else {
        $session_start;
        $_SESSION['errou'] = '';
        header('location:../cadastro.php');
        die;
    }

}

// if ($insert) {
//     var_dump($emarray);
//     // header('Location:/PRO V1/index.php');
// }
