<?php
$funcionario = $_POST['funcionario'];
$projeto = $_POST['projeto'];

include_once "conexao.php";

// Usando prepared statements para evitar SQL Injection
$sql = "INSERT INTO beneficio (Emp_code, Plan_code) VALUES (?, ?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ss", $funcionario, $projeto);

$result = mysqli_stmt_execute($stmt);

if (!$result) {
    echo "não deu";
} else {
    header("Location: inicio.php");
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
