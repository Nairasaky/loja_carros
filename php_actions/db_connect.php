<?php


$servername = "localhost";
$username = "root";
$password = "";
$db_name = "loja_carros";

$connect = mysqli_connect($servername, $username, $password, $db_name);

mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()):

  echo "Erro de Conexão com o banco de dados: ". mysql_connect_error();

endif;
