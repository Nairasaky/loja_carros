<?php
//conexão
include_once 'php_actions/db_connect.php';

//header------------------------------------------------------------
include_once 'includes/header.php';

if(isset($_GET['id'])):
  $id = mysqli_escape_string($connect, $_GET['id']);
  $sql = "SELECT * FROM estoque WHERE id='$id'";
  $result = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($result);
endif;

?>


<div class="section no-pad-bot" id="index-banner">
      <div class="container">
        <br /><br />
        <div class="row center">
          <div class="col s12">
            <h3 class="light materialize-red-text">Editar Carro</h3>

            <form action="php_actions/update.php" method="POST">

              <input type="hidden" name ="id"  value = "<?php echo $dados['id'];?>">
              <div class="input-field col s12 m4">
                <input type="text" name="marca" id="marca" value= "<?php echo $dados['marca'];?>">
                <label for="marca">MARCA</label>
              </div>
              <div class="input-field col s12 m4">
                <input type="text" name="modelo" id="modelo" value= "<?php echo $dados['modelo'];?>">
                <label for="modelo">MODELO</label>
              </div>
              <div class="input-field col s12 m4">
                <input type="text" name="descricao" id="descricao" value= "<?php echo $dados['descricao'];?>">
                <label for="descricao">DESCRIÇÃO</label>
              </div>
              <div class="input-field col s12 m4">
                <input type="text" name="mod_fab" id="mod_fab" value= "<?php echo $dados['mod_fab'];?>">
                <label for="mod_fab">MODELO/FABRICAÇÃO</label>
              </div>
              <div class="input-field col s12 m4">
                <input type="text" name="cor" id="cor" value= "<?php echo $dados['cor'];?>">
                <label for="cor">COR</label>
              </div>
              <div class="input-field col s12 m4">
                <input type="text" name="placa" id="placa" value= "<?php echo $dados['placa'];?>">
                <label for="placa">PLACA</label>
              </div>
              <div class="input-field col s12">
                <input type="text" name="valor" id="valor" value= "<?php echo $dados['valor'];?>">
                <label for="valor">VALOR (R$)</label>
              </div>
              <button type="submit" name="btn_salvar" class="btn vermelho-vivo"> SALVAR </button>

            </form>
      </div> 

    
      </div>
      <br><br>

    </div>
  </div>


<?php
//footer--------------------------------------------------------------------------------------
include_once 'includes/footer.php';
?>