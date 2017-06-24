<?php
include "conect.php";

$id = $_GET['id'];
$login = $_GET['login'];
$password = $_GET['password'];
$profile = $_GET['id_profiles'];

$sql = mysql_query("SELECT * FROM users WHERE id = $id");

$escrever = mysql_fetch_assoc($sql);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Avaliação 1</title>
<link href="bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body style="margin-left:20px">

<form style="width:300px;" id="formeditar" name="formeditar" method="post" action="update.php">
	<input class="form-control" id="id" type="hidden" name="id" method="post" value="<?php echo $escrever['id']; ?>"><br/>
    <input class="form-control" id="login" name="login" type="text" value="<?php echo $escrever['login']; ?>"><br/>
    <input class="form-control" id="password" name="password" type="text" value="<?php echo $escrever['password']; ?>"><br/>
    <label><input type="radio" name="id_profiles" id="id_profiles" value="1" checked>Root</label>
	<label><input type="radio" name="id_profiles" id="id_profiles" value="2" checked>Manager</label>
	<label><input type="radio" name="id_profiles" id="id_profiles" value="3" checked>User</label></br>
	<button class="btn btn-success" type="submit">Editar</button>

</form>

	</br><a href="listarusuarios.php"><button class="btn btn-default" type="button">Voltar</button></a></br>
	</br><a href="logout.php"><button class="btn btn-danger" type="button">Sair</button></a>
</body>
</html>