<?php
include "conect.php";

$select = "SELECT * FROM users";
$result = mysql_query($select);
$select2 = "SELECT * FROM profiles";
$result2 = mysql_query($select2);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema Session</title>
<link href="bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<table class="table table-striped">
		<?php

		echo "<tr><td><h5>ID</h5></td><td><h5>Login</h5></td><td><h5>Senha</h5></td><td><h5>Acesso</h5></td></tr>";
		while ($escrever = mysql_fetch_array($result)) {
			if ($escrever['id_profiles'] == 1) {
				$profiles = "Root";
				echo '<tr><td>'.$escrever['id'].'</td><td>'.$escrever['login'].'</td><td>'.$escrever['password'].'</td><td>'.$profiles.'</td><td>Editar</td><td>Excluir</td></tr>';
			}elseif ($escrever['id_profiles'] == 2) {
				$profiles = "Manager";
			}else{
				$profiles = "User";
			}
			if ($profiles != 'Root') {
				echo '<tr><td>'.$escrever['id'].'</td><td>'.$escrever['login'].'</td><td>'.$escrever['password'].'</td><td>'.$profiles.'</td><td><a href="editarusuario.php?id='.$escrever['id'].'">Editar</a></td><td><a href="excluirusuario.php?id='.$escrever['id'].'">Excluir</a></td></tr>';
			}
			//echo '<tr><td>'.$escrever['id'].'</td><td>'.$escrever['login'].'</td><td>'.$escrever['password'].'</td><td>'.$profiles.'</td><td><a href="editarusuario.php">Editar</a></td><td><a href="excluirusuario.php?id='.$escrever['id'].'">Excluir</a></td></tr>';
		}
		//while ($escrever = mysql_fetch_array($result2)) {
			
		//	echo '<tr><td>'.$escrever['name'].'</td></tr>';
		//}
		?>

	</table>
	<a href="inicial.php"><button class="btn btn-default" type="button">Voltar</button></a></br>
	</br><a href="logout.php"><button class="btn btn-danger" type="button">Sair</button></a>
</body>
</html>