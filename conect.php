<?php
$conexao = mysql_connect("localhost", "root2", "root2");

if (!$conexao) die ("Erro de conexção com o servidor: ".msql_error());
//var_dump($conexao);

$db = mysql_select_db("avalia02a", $conexao);
if (!$db) die (' database not selected: '.mysql_error());
//var_dump($db);
//$select = "select * from users";

//$result = mysql_query($select, $conexao);
?>