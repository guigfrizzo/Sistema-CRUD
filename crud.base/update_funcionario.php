<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Atualizar Funcionário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        center {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        input[type="text"], input[type="submit"] {
            padding: 10px;
            margin: 10px 0;
            width: 80%;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <center>
        <h1>Atualizar Funcionário</h1>
        <form action="atualizar_funcionario.php" method="post" autocomplete="off">
            Código do Funcionário:
            <input type="text" name="Emp_code" value="" placeholder="Informe o código do funcionário" required>
            <br><br>
            Nome do Funcionário:
            <input type="text" name="Emp_lname" value="" placeholder="Informe o nome do funcionário" required>
            <p>
            <input type="submit" value="Atualizar">
            <a href="inicio.php"><input type="button" value="Voltar"></a>
        </form>
    </center>
</body>
</html>
