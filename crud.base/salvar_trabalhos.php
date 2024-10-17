<?php 
$Job_description = $_POST['Job_description'];

include_once "conexao.php";

// Usando prepared statements para evitar SQL Injection
$sql = "INSERT INTO trabalho (Job_description) VALUES (?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $Job_description);

$result = mysqli_stmt_execute($stmt);

if (!$result) {
    echo "não deu";
} else {
    header("Location: inicio.php");
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
