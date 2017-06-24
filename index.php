<?php 

include 'conect.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema Session</title>
<link href="bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
<center></br><h4>Acesso restrito</h4>
	<form style="width:300px; height:500px; text-align:center;" id="formlogin" name="formlogin" method='post' action="open.php" >
		<input class="form-control" name="login" id = "login" type = "text" placeholder="Usuário"><br/>
		<input class="form-control" name="password" id = "password" type = "password" placeholder="Senha"><br/>
		<button class="btn btn-success" style="width:150px" type="submit">Entrar</button>
	</form>
</center>
</body>
</html>