<?php
//sessão
session_start();

//conexão
require_once 'db_connect.php';

if(isset($_POST['btn_salvar'])) :
  $id = mysqli_escape_string($connect, $_POST['id']);
  $marca = mysqli_escape_string($connect, $_POST['marca']);
  $modelo = mysqli_escape_string($connect, $_POST['modelo']);
  $descricao = mysqli_escape_string($connect, $_POST['descricao']);
  $mod_fab = mysqli_escape_string($connect, $_POST['mod_fab']);
  $cor = mysqli_escape_string($connect, $_POST['cor']);
  $placa = mysqli_escape_string($connect, $_POST['placa']);
  $valor = mysqli_escape_string($connect, $_POST['valor']);

  $sql ="UPDATE estoque SET marca = '$marca', modelo = '$modelo', descricao = '$descricao', mod_fab = '$mod_fab', cor = '$cor', placa = '$placa', valor = '$valor' WHERE id = '$id' ";

  if(mysqli_query($connect, $sql)):
    header("Location: ../consultar.php?Sucesso");
  else:
    header("Location: ../consultar.php?Erro");
  endif;
endif;