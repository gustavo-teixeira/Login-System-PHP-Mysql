<?php
include 'conect.php';

session_start();

if((!isset ($_SESSION['login']) == root) and (!isset ($_SESSION['password']) == true)){
	unset($_SESSION['login']);
	unset($_SESSION['password']);
	header('location:index.php');

//if (!isset($_SESSION["login"]) || !isset($_SESSION["password"])) {
//	header('location:index.php');
//	exit;
}

$logado = $_SESSION['login'];

	/*echo $_COOKIE["login"]."<br>";
	echo $HTTP_COOKIE_VARS["login"]."<br>";
	echo $_COOKIE["password"]."<br>";
	echo $HTTP_COOKIE_VARS["password"."<br>"];
	echo $_COOKIE["id_profiles"]."<br>";
	echo $HTTP_COOKIE_VARS["id_profiles"."<br>"];
	setcookie("login");*/

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema Session</title>
<link href="bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

<p>Hello <?php echo $logado?>, você é um ROOT!</p>

<a href="cadastrausuario.php"><button class="btn btn-info" type="button">Cadastrar Usuário</button></a>
<a href="listarusuarios.php"><button class="btn btn-info" type="button">Listar Usuários</button></a>

<a href="logout.php"><button class="btn btn-danger" type="button">Sair</button></a>




</body>
</html>