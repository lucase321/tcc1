<?php
require 'conexao.php';
$user_id = $_GET['id'];
$nome = $conn->real_escape_string($_POST['nome']);
$email = $conn->real_escape_string(strtolower($_POST['email']));
$telefone = $conn->real_escape_string($_POST['telefone']);
$query_select = "SELECT email FROM usuario WHERE email = '$email'";
$select = mysqli_query($conn, $query_select);
$array = mysqli_fetch_array($select);
$emarray = $array['email'];
$user = selectUser($user_id);

if ($emarray == $email) {
    if($email == $user['email']){
    $alterar = alterarPessoa($user_id); 
    header("location:../conta.php?id=$user_id");
    die;
    } else {
        session_start();
        $_SESSION['email'] = '';
        header("location:../conta.php?id=$user_id");
        die; 
    }
} else {
    $alterar = alterarPessoa($user_id); 
    header("location:../conta.php?id=$user_id");
}




?>