<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Incluir</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 0 auto;
        }
        input[type="text"] {
            width: 95%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"],
        input[type="button"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover,
        input[type="button"]:hover {
            background-color: #45a049;
        }

        .form-buttons {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <center>
        
        <form action="salvar_trabalhos.php" method="post" autocomplete="off">
        <h1>Incluir Trabalho</h1>
            Descrição do trabalho:
            <input type="text" name="Job_description" value="" placeholder="Informe a descrição do trabalho" autofocus required>
            <p>
            <input type="submit" value="Salvar">
            <input type="button" value="Voltar" onclick="window.location.href='inicio.php';"> <!-- Botão Voltar -->
        </form>
    </center>
</body>
</html>
