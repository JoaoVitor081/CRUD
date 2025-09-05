<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>

<main>

  <div class="container">
      <h1>Lista de Produtos</h1>
      <a href="./salvar-produtos.php" class="btn btn-add">Incluir</a> 
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
        <?php
            $sql = "SELECT p.ProdutoID AS ID, p.Nome AS Nome, c.Nome AS Categoria, p.Preco AS Preco
            FROM produtos p
            JOIN categorias c ON p.CategoriaID = c.CategoriaID";

            
            $resultado = mysqli_query($conexao, $sql);
            
            while ($linha = mysqli_fetch_assoc($resultado)) {
                echo '
                <tr>
                    <td>'.$linha['ID'].'</td>
                    <td>'.$linha['Nome'].'</td>
                    <td>'.$linha['Categoria'].'</td>
                    <td>R$ '.number_format($linha['Preco'], 2, ',', '.').'</td>
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

<?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>