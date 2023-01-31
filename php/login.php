<?php
require 'conexao.php';

if(isset($_POST['email']) || isset($_POST['senha'])){
    $email = $conn->real_escape_string(strtolower($_POST['email']));
    $senha = $_POST['senha'];
    // $senha = $conn->real_escape_string(password_hash($_POST['senha'], PASSWORD_DEFAULT));


    $query_id = "SELECT user_id FROM usuario WHERE email = '$email'";
    $id = mysqli_query($conn, $query_id) or die("Falha na execução do código SQL: " . $conn->error);
    $quantidade = $id->num_rows;
    $fetch = mysqli_fetch_array($id);
    $idarray = $fetch['user_id'];

    if($quantidade == 1){
        $query_hash = "SELECT senha from usuario WHERE email ='$email'";
        $hash = mysqli_query($conn, $query_hash);
        $array = mysqli_fetch_array($hash);
        $hasharray = $array['senha'];
        $verify = password_verify($senha, $hasharray);
        // var_dump($array);
        // var_dump($hasharray);
        var_dump($verify);
        if($verify){
            session_start();
            $_SESSION['id'] = $idarray;
            header('location:../index.php');
            die;
        } else {
            session_start();
            $_SESSION['senhae'] = '';
            header('location:../login.php');
        }
    } else {
        session_start();
        $_SESSION['emaile'] = '';
        header('location:../login.php');
    }

}






















?>