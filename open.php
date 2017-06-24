<?php

include 'conect.php';

$login = $_POST['login'];
$password = $_POST['password'];
$profiles = $_POST['id_profiles'];

//COOKIE
setcookie('login', $login, time()+3600);
setcookie('password', $password, time()+3600);
setcookie('id_profiles', $profiles, time()+3600);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema Session</title>
<link href="bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript">
		function loginsucessroot(){
			alert("Você foi logado com sucesso!");
			setTimeout("window.location='inicial.php'", 100);
		}
		function loginsucessmanager(){
			alert("Você foi logado com sucesso!");
			setTimeout("window.location='inicialmanager.php'", 100);
		}
		function loginsucessuser(){
			alert("Você foi logado com sucesso!");
			setTimeout("window.location='inicialusers.php'", 100);
		}
		function loginfailed(){
			alert("Login ou senha invalido!");
			setTimeout("window.location='index.php'", 100);
		}
		function notAccess(){
			alert("Você não tem permissão para acesar!");
			setTimeout("window.location='index.php'", 100);
		}
	</script>
</head>

<body>

<?php


//MD5 Hash
//$password = md5($password);
//$login = md5($login);

$select = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
$result = mysql_query($select, $conexao) or die (mysql_error());
$select2 = "SELECT * FROM users WHERE id_profiles = $profiles";
$result2 = mysql_query($select2, $conexao);

/*if ($_POST['login'] != ""){
		echo "<br>".$_POST['login']."<br>";
		
		$login = $_POST['login'];
		$newusername = stripslashes($login);
		echo  "<br>".$newusername."<br>";
	    $newusername = mysql_real_escape_string($newusername);
		echo  "<br>".$newusername."<br>";
		
		
		$query = "SELECT * FROM users WHERE login = '".$newusername."' AND password = '$password'";
		
		$result = mysql_query($query);
		
		if (mysql_num_rows($result) > 0) {
			session_start();
			$_SESSION['login'] = $login;
			$_SESSION['password'] = $password;
			$_SESSION['id_profiles'] = $profiles;
			echo "<script>loginsucessroot()</script>";
		}else{
			unset ($_SESSION['login']);
			unset ($_SESSION['password']);
			echo "<script>loginfailed()</script>";

		}
		
	}*/
	
	//*
	if (mysql_num_rows($result) > 0) {
		while ($escrever = mysql_fetch_array($result)) {

			if ($escrever['id_profiles'] ==1 ) {
				session_start();
				$_SESSION['login'] = $login;
				$_SESSION['password'] = $password;
				$_SESSION['id_profiles'] = $profiles;
				echo "<script>loginsucessroot()</script>";
			}elseif ($escrever['id_profiles']  ==2){
				echo "<script>notAccess()</script>";
			}elseif ($escrever['id_profiles']  ==3){
				echo "<script>notAccess()</script>";
			}
		}
		//*/
/*
if (mysql_num_rows($result) > 0) {
		

		session_start();
		$_SESSION['login'] = $login;
		$_SESSION['password'] = $password;
		$_SESSION['id_profiles'] = $profiles;
		//header('location:inicial.php');
		echo "<script>loginsucessroot()</script>";
		//echo "Voce foi logado com sucesso!";*/
}else{
	unset ($_SESSION['login']);
	unset ($_SESSION['password']);
	//header('location:index.php');
	echo "<script>loginfailed()</script>";
	//echo "Login e senha invalidos";

}
?>
</body>
</html>