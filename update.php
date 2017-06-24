<?php

include "conect.php";

$id = $_POST['id'];
$login = $_POST['login'];
$password = $_POST['password'];
$profile = $_POST['id_profiles'];

/*echo $id;
echo $login;
echo $password;
echo $profile;*/

$query = "UPDATE users SET login = '$login', password = '$password', id_profiles = $profile WHERE id = $id";

//mysql_query($query) or die (mysql_error());

//echo "Usuário atualizado com sucessso!";

$login = filter_var($login, FILTER_VALIDATE_EMAIL);
	
	if (empty($login)) {	
		echo 'Nao e um E-mail valido!</br><a href="listarusuarios.php"><button class="btn btn-default" type="button">Voltar</button></a></br></br><a href="logout.php"><button class="btn btn-danger" type="button">Sair</button></a>';
	}else{
		mysql_query($query);
		echo 'Usuario alterado com sucesso!</br><a href="listarusuarios.php"><button class="btn btn-default" type="button">Voltar</button></a></br></br><a href="logout.php"><button class="btn btn-danger" type="button">Sair</button></a>';
	}

/*if(mysql_query($query)){
  echo "Usuario alterado com sucesso!</br><a href='listarusuarios.php'>Voltar</a>";
    exit;
}else{
	echo mysql_error();
	exit;
}*/
?>