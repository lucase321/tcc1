<?php
$servername = "localhost";
$username = "root";
$password = "";
$banco = "salvep";
$conn = mysqli_connect($servername, $username, $password, $banco);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

function selectAllUsers() {
  global $conn;
	$query_select = "SELECT * FROM usuario";
	$select = mysqli_query($conn, $query_select);
	while($row = mysqli_fetch_array($select)) {
		$grupo[] = $row;
	}
return $grupo;
}

function selectUser($id){
	global $conn;
	$query_select = "SELECT * FROM usuario WHERE user_id = '$id'";
	$select = mysqli_query($conn, $query_select);
	$array = mysqli_fetch_array($select);
	
	return $array;
	}
function alterarPessoa($id){
	global $conn;
	$query_update = "UPDATE usuario SET nome='{$_POST['nome']}', telefone='{$_POST['telefone']}',
	email='{$_POST['email']}' WHERE user_id='$id'";
	mysqli_query($conn, $query_update);
	}
	
	
function firstname($id){
	global $conn;
	$query_select = "SELECT * FROM usuario WHERE user_id = '$id'";
	$select = mysqli_query($conn, $query_select);
	$array = mysqli_fetch_array($select);
	$name = $array['nome'];
	$explode = explode(" ", $name);
    $firstname = $explode[0];
	return $firstname;
	}

function selectAllAnimals($tipo) {
	global $conn;
	  $query_select = "SELECT * FROM animal WHERE tipo = '$tipo'";
	  $select = mysqli_query($conn, $query_select);
	  $quantidade = $select->num_rows;
	  while($row = mysqli_fetch_array($select)) {
		  $grupo[] = $row;
	  }
  return $grupo;
  }

function quantidadeAnimais($tipo) {
	global $conn;
	$query_select = "SELECT * FROM animal WHERE tipo = '$tipo'";
	$select = mysqli_query($conn, $query_select);
	$quantidade = $select->num_rows;
	return $quantidade; 
}

function selectAnimalFromUser($id) {
	global $conn;
	  $query_select = "SELECT * FROM animal WHERE cod_user = '$id'";
	  $select = mysqli_query($conn, $query_select);
	  while($row = mysqli_fetch_array($select)) {
		  $animal[] = $row;
	  }
  return $animal;
  }

  function quantidadeAnimaisFromUser($id) {
	global $conn;
	  $query_select = "SELECT * FROM animal WHERE cod_user = '$id'";
	  $select = mysqli_query($conn, $query_select);
	  $quantidade = $select->num_rows;
  return $quantidade;
  }

  
function selectAnimalFromId($id) {
	global $conn;
	  $query_select = "SELECT * FROM animal WHERE ani_id = '$id'";
	  $select = mysqli_query($conn, $query_select);
	  $array = mysqli_fetch_array($select);
	
	  return $array;
  }

  function deleteAnimal($id){
	global $conn;
	$query_delete = "DELETE FROM animal WHERE ani_id = '$id'";
	mysqli_query($conn, $query_delete);
}

  function pathphp($path){
	$explode = explode("/", $path);
	$path = '/' . $explode[3] . '/' . $explode[4] . '/' . $explode[5];
	return $path;
  }
  function path($path){
	$explode = explode("/", $path);
	$path = $explode['1'] . "/" . $explode['2'];
	return $path;
  }


// $animal = selectAnimalFromUser(30);


// foreach($animal as $animal) { 
//   echo "<strong>Animal</strong>" . "<br>";
//   echo "ID: " . $animal['ani_id'] . "<br>";
//   echo "Espécie: " . $animal['especie'] . "<br>";
//   $explode = explode("/", $animal['path']);
//   $path = '/' . $explode[3] . '/' . $explode[4] . '/' . $explode[5];
//   echo '<img src="' . $path . '"' . 'alt=""' . '<br>';
//   echo "<hr>";
  
// }

// $user = selectUser(28);
// var_dump($user);

// $grupo = selectAllUser();
// foreach($grupo as $key => $user) { 
//   echo "<strong>Usuário $key</strong>" . "<br>";
//   echo "ID: " . $user['user_id'] . "<br>";
//   echo "<hr>";
// }








?>


