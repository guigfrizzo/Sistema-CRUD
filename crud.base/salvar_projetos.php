<?php
$Plan_description = $_POST['Plan_description'];

include_once "conexao.php";

// Usando prepared statements para evitar SQL Injection
$sql = "INSERT INTO projeto (Plan_description) VALUES (?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $Plan_description);

$result = mysqli_stmt_execute($stmt);

if (!$result) {
    echo "não deu";
} else {
    header("Location: inicio.php");
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
