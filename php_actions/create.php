<?php
//sessão
session_start();

//conexão
require_once 'db_connect.php';


if(isset($_POST['btn_adicionar'])):
  $marca = mysqli_escape_string($connect, $_POST['marca']);
  $modelo = mysqli_escape_string($connect, $_POST['modelo']);
  $descricao = mysqli_escape_string($connect, $_POST['descricao']);
  $mod_fab = mysqli_escape_string($connect, $_POST['mod_fab']);
  $cor = mysqli_escape_string($connect, $_POST['cor']);
  $placa = mysqli_escape_string($connect, $_POST['placa']);
  $valor = mysqli_escape_string($connect, $_POST['valor']);

  $sql ="INSERT INTO estoque (marca, modelo, descricao,mod_fab, cor, placa, valor) VALUES ('$marca', '$modelo', '$descricao','$mod_fab', '$cor', '$placa', '$valor')";

  if(mysqli_query($connect, $sql)):

    header("Location: ../consultar.php?Sucesso");

  else:

    header("Location: ../consultar.php?Erro");

  endif;
  
endif;
