<?php
// include dos arquivos
include_once   '../include/logado.php';
include_once   '../include/conexao.php';

// captura a acao dos dados
$acao = $_GET['acao'];
$id = $_GET['id'];
// validacao
switch ($acao) {
        case 'excluir':
            $sql = 'DELETE FROM setores WHERE SetoresID = '.$id;
    
            if (mysqli_query($conexao, $sql)) {
                header("Location: ../lista-setores.php?msg=sucesso");
                exit;
            } else {
                header("msg=erro");
                exit;
            }        
    
    default:
        # code...
        break;
}
?>