
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1.0"
    />
    <title>FEREIRA PICKUPS</title>

    <!-- CSS  -->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      href="../css/materialize.css"
      type="text/css"
      rel="stylesheet"
      media="screen,projection"
    />
    <link
      href="../css/style.css"
      type="text/css"
      rel="stylesheet"
      media="screen,projection"
    />

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js">
      defer
    </script>
    <script src="../js/materialize.js">
      defer
    </script>
    <script src="../js/init.js">
      defer
    </script>
  </head>
  <body>

    <?php
      //conexão
      include_once 'db_connect.php';
    ?>


     
    <div class="section no-pad-bot" id="index-banner">
      <div class="container">
        <br /><br />
        <div class="row center">
        <img src="../assetes/1.svg" />
          <div class="col s12">
            <h3 class="light">Relatório</h3>
            <?php
              if(isset($_POST['btn_relatorio'])):
                $marcaselecionada = $_POST['marcaselecionada'];
              endif;
            ?>

            <h4 class="light"><?php echo $marcaselecionada; ?></h4>

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
                if(isset($_POST['btn_relatorio'])):
                  if($marcaselecionada=="Todas as Marcas"):
                    $sql= "SELECT * FROM estoque ORDER BY marca, modelo, mod_fab, valor";
                  else:
                  $sql= "SELECT * FROM estoque WHERE marca = '$marcaselecionada' ORDER BY marca, modelo, mod_fab, valor";
                  endif;
                
                ?>

                <?php
                  
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
                </tr>
                <?php 
                  endwhile;
                  endif; 
                ?>
              </tbody>
            </table>

                </br>
                </br>
                <div class ="col s7">
            <button class="btn-large black right"onclick="window.print()">IMPRIMIR</button>
                </div>
          </div>
        </div>
        <br /><br />
      </div>
    </div>

  </body>
</html>