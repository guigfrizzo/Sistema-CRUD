<?php
// Captura o código do funcionário enviado pelo formulário
$Emp_code = $_POST['Emp_code'];

// Conecta ao banco de dados
include_once "conexao.php";

// Prepara a consulta para excluir o funcionário
$sql = "DELETE FROM funcionario WHERE Emp_code = '$Emp_code'";
$result = mysqli_query($conn, $sql);

// Verifica se a consulta foi bem-sucedida
if (!$result) {
    // Se houve erro, exibe mensagem
    echo "<div style='text-align: center; margin-top: 20px;'>";
    echo "<h2 style='color: red;'>Erro ao excluir o funcionário!</h2>";
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
