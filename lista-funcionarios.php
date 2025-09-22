<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>

<main>

  <div class="container">
      <h1>Lista de Funcionários</h1>
      <a href="./salvar-funcionarios.php" class="btn btn-add">Incluir</a> 
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cargo</th>
            <th>Setor</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>

        <?php
            $sql = "SELECT f.FuncionarioID AS ID, f.Nome AS Nome, c.Nome AS Cargo, s.Nome AS Setor
              FROM funcionarios f
              JOIN cargos c ON f.CargoID = c.CargoID
              JOIN setor s ON f.SetorID = s.SetorID";
            
            $resultado = mysqli_query($conexao, $sql);
            
            while ($linha = mysqli_fetch_assoc($resultado)) {
                echo '
                <tr>
                    <td>'.$linha['ID'].'</td>
                    <td>'.$linha['Nome'].'</td>
                    <td>'.$linha['Cargo'].'</td>
                    <td>'.$linha['Setor'].'</td>
                    <td>
                        <a href="./salvar-funcionarios.php?id='.$linha['Nome'].'" class="btn btn-edit">Editar</a>
                        <a href="./action/funcionarios.php?acao=excluir&id='.$linha['ID'].'" class="btn btn-delete">Excluir</a>
                    </td>
                </tr>';
            }
            ?>
            
        </tbody>
      </table>
    </div>

<?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>