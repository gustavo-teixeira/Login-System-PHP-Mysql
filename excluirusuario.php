<?php
include "conect.php";

//$select = "SELECT * FROM users WHERE id";
$id = $_GET['id'];

if (mysql_query("DELETE FROM users WHERE id=$id")) {
	echo '<script>alert("Usuario removido com sucesso!");</script><a href="listarusuarios.php">Voltar</a></br><a href="logout.php">Sair</a>';
	exit();
}else{
	echo mysql_error();
	exit;
}

?>