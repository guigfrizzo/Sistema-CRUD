<?php
$Emp_lname = $_POST['Emp_lname'];
$Job_code = $_POST['Job_code'];

include_once "conexao.php";

// Usando prepared statements para evitar SQL Injection
$sql = "INSERT INTO funcionario (Emp_lname, Job_code) VALUES (?, ?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ss", $Emp_lname, $Job_code);

$result = mysqli_stmt_execute($stmt);

if (!$result) {
    echo "não deu";
} else {
    header("Location: inicio.php");
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
