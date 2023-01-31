<?php
require 'conexao.php';
$ani_id = $_GET['id'];
$animal = selectAnimalFromId($ani_id);
$iduser = $animal['cod_user'];
deleteAnimal($ani_id);

header("location:../conta.php?id=$iduser");
















?>