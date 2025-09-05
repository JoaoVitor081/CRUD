<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>
  <main>

    <div class="container">
        <h1>Lista de Produções</h1>
        <a href="./salvar-producao.php" class="btn btn-add">Incluir</a> 
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Produto</th>
              <th>Quantidade</th>
              <th>Data</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $sql = "SELECT pr.ProducaoID AS ID, p.Nome AS Produto, pr.DataProducao AS Data
              FROM producao pr
              JOIN produtos p ON pr.ProdutoID = p.ProdutoID";

            
            $resultado = mysqli_query($conexao, $sql);
            
            while ($linha = mysqli_fetch_assoc($resultado)) {
                echo '
                <tr>
                  <td>'.$linha['ID'].'</td>
                  <td>'.$linha['Produto'].'</td>
                  <td>1</td>
                  <td>'.$linha['Data'].'</td>
                  <td>
                    <a href="#" class="btn btn-edit">Editar</a>
                    <a href="#" class="btn btn-delete">Excluir</a>
                  </td>
               </tr>';
               
            }
            ?>
          </tbody>
        </table>
      </div>


   
  </main>

  <?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>