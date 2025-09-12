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
        $sql = "DELETE FROM usuarios WHERE UsuarioID = $id";
        if (mysqli_query($conexao, $sql)) {
            echo "Registro excluído com sucesso";
        } else {
            echo "Erro ao excluir registro: " . mysqli_error($conexao);
        }
        header("Location: ../lista-usuarios.php");
        break;
    
    default:
        # code...
        break;
}
?>