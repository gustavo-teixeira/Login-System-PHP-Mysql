<?php 
if(isset($_POST['id_profiles'])){
	$login = $_POST['login'];
	$password = $_POST['password'];
	$profiles = $_POST['id_profiles'];

	//include 'connect.php';
	$conexao = mysql_connect("localhost", "root2", "root2");

	if (!$conexao) die ("Erro de conexção com o servidor: ".msql_error());
	//var_dump($conexao);

	$db = mysql_select_db("avalia02a", $conexao);
	if (!$db) die (' database not selected: '.mysql_error());

	$query = "INSERT INTO users (id_profiles, login, password) VALUES ($profiles, '$login', '$password')";

	#mysql_query($query) or die (mysql_error());

	$login = filter_var($login, FILTER_VALIDATE_EMAIL);
	
	if (empty($login)) {	
		echo "email errado";
	}else{
		mysql_query($query);
		echo "Usuário adicionado com sucessso!";
	}

	#echo "Usuário adicionado com sucessso!";
	mysql_close();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema Session</title>
<link href="bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body style="margin-left:20px">
<h4>Cadastre um novo usuario</h4>
	<form style="width:300px" id="formcadastro" name="formcadastro" method='post' action="cadastrausuario.php" >
		<input class="form-control" name="login" id = "login" type = "text" placeholder="Usuario"><br/>
		<input class="form-control" name="password" id = "password" type = "password" placeholder="Senha"><br/>
		<label><input type="radio" name="id_profiles" id="id_profiles" value="1" checked>Root</label>
		<label><input type="radio" name="id_profiles" id="id_profiles" value="2" checked>Manager</label>
		<label><input type="radio" name="id_profiles" id="id_profiles" value="3" checked>User</label></br>
		<button class="btn btn-success" type="submit">Cadastrar</button>
	</form>

	</br><a href="inicial.php"><button class="btn btn-default" type="button">Voltar</button></a></br>
	</br><a href="logout.php"><button class="btn btn-danger" type="button">Sair</button></a>
<br/>
</body>
</html>