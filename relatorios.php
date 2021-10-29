<?php

//conexão
include_once 'php_actions/db_connect.php';

//header=====================================================
include_once 'includes/header.php';

?>


<div class="section no-pad-bot" id="index-banner">
      <div class="container">
        <br /><br />
        <div class="row center">
          <div class="col s12">
            <h3 class="light">Relatórios</h3>
            <form action="php_actions/report.php" target="_blank" method="POST">
              <label for="marca">Selecione a Marca: </label>
              <select name="marcaselecionada">
                <option>Todas as Marcas</option>
                <?php
                  $sql = "SELECT DISTINCT marca FROM estoque";
                  $result = mysqli_query($connect, $sql);

                  while($dados=mysqli_fetch_array($result)):
                ?>  
                <option> <?php echo $dados['marca'];?> </option>
                <?php endwhile; ?>
              </select>
              
              <input type="submit" name="btn_relatorio" class="btn orange" value="SELECIONAR" />
            </form>
          </div>
        </div>
        <br /><br />
      </div>
    </div>

<?php
//footer==================================================
include_once 'includes/footer.php';
?>