<?php
// Captura o ID do município enviado pelo formulário
$idmunicipios = $_POST['idmunicipios'];

// Conecta ao banco de dados
include_once "conexao.php";

// Prepara a consulta para excluir o município
$sql = "DELETE FROM municipios WHERE idmunicipios = '$idmunicipios'";
$result = mysqli_query($conn, $sql);

// Verifica se a consulta foi bem-sucedida
if (!$result) {
    // Se houve erro, exibe mensagem
    echo "<div style='text-align: center; margin-top: 20px;'>";
    echo "<h2 style='color: red;'>Erro ao excluir o município!</h2>";
    echo "<p style='color: gray;'>Por favor, tente novamente.</p>";
    echo "<a href='inicio.php' style='text-decoration: none; color: #4CAF50; font-weight: bold;'>Voltar</a>";
    echo "</div>";
} else {
    // Redireciona para a página inicial em caso de sucesso
    header("Location: inicio.php");
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>
