<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';

?>
  <main>
    <div class="container">
        <h1>Lista de Cargos</h1>
        <a href="./salvar-cargos.php" class="btn btn-add">Incluir</a>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Teto Salárial</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            
          <?php
            $sql = "SELECT * FROM cargos";
            $resultado = mysqli_query($conexao, $sql);
            while ($linha = mysqli_fetch_assoc($resultado)) {
              echo '
              <tr>
                <td>'.$linha['CargoID'].'</td>
                <td>'.$linha['Nome'].'</td>
                <td>'.$linha['TetoSalarial'].'</td>
                <td>
                  <a href="./salvar-cargos.php?id='.$linha['CargoID'].'" class="btn btn-edit">Editar</a>
                  <a href="./action/cargos.php?id='.$linha['CargoID'].'&acao=excluir" class="btn btn-delete">Excluir</a>
                </td>
              </tr>';}
 
 
              ?>
          </tbody>
        </table>
      </div> 
  </main>
  
  <?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>