<?php
require 'conexao.php';

if(!isset($_SESSION['id'])) {
    session_start();
}

session_destroy();
header('location:../index.php')
?>