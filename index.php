<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>

  
  <main>


   
  </main>
  <?php 
  // include dos arquivox
  include_once './include/footer.php';

  if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
echo "Conectado com sucesso";
  ?>