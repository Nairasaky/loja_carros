<?php

//conexão
include_once 'php_actions/db_connect.php';

//header---------------------------------------
include_once 'includes/header.php';

?>


<div class="section no-pad-bot" id="index-banner">
      <div class="container">
        <br /><br />
        <div class="row center">
          <div class="col s12">
            <h3 class="light materialize-red-text">Estoque de Carros</h3>
            <table class= "striped">
              <thead>
                <tr>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Descrição</th>
                  <th>Modelo/Fabricação</th>
                  <th>Cor</th>
                  <th>Placa</th>
                  <th>Valor (R$)</th>
                </tr>
              </thead>
              <tbody>

              <?php
                $sql= "SELECT * FROM estoque";
                $result= mysqli_query($connect, $sql);

                while($dados= mysqli_fetch_array($result)):
              ?>
                <tr>
                  <td><?php echo $dados['marca'];?></td>
                  <td><?php echo $dados['modelo'];?></td>
                  <td><?php echo $dados['descricao'];?></td>
                  <td><?php echo $dados['mod_fab'];?></td>
                  <td><?php echo $dados['cor'];?></td>
                  <td><?php echo $dados['placa'];?></td>
                  <td><?php echo $dados['valor'];?></td>
                  <td><a href="editar.php?id=<?php echo $dados['id'];?>" class="btn-floating blue">
                    <i class="material-icons"> edit</i></a>
                  </td>
                  <td><a href="#modal<?php echo $dados['id'];?>" class="btn-floating red         modal-trigger">
                    <i class="material-icons"> delete</i></a>
                  </td>

                  <!-- Modal Structure -->
                  <div id="modal<?php echo $dados['id'];?>" class="modal modal-fixed-footer">
                    <div class="modal-content">
                      <h4>Tem Cereteza Que Deseja Excluir Esse Registro?</h4>
                      <p><?php echo $dados['marca'];?> - 
                        <?php echo $dados['modelo'];?> - 
                        <?php echo $dados['descricao'];?> - 
                        <?php echo $dados['mod_fab'];?> - 
                        <?php echo $dados['cor'];?> - 
                        <?php echo $dados['placa'];?> - 
                        <?php echo $dados['valor'];?>
                      </p>
                    </div>
                    <div class="modal-footer">
                      <form action = "php_actions/delete.php" method="POST">
                        <a href="#!" class="modal-close waves-effect waves-green btn green">Não, Não Excluir.</a>
                        <input type="hidden" name="id" value = "<?php echo $dados['id'];?>">
                        <button type="submit" name="btn_deletar" class="btn red">Sim, Tenho Certeza.</button>
                      </form>
                    </div>
                  </div>

                </tr>
                <?php 
                  endwhile;
                ?>
              </tbody>
            </table>
            
          </div>
        </div>
        <br /><br />
      </div>
    </div>

<?php
//footer-------------------------------------------------------
include_once 'includes/footer.php';
?>