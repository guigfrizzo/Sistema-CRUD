<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Atualizar Município</title>
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
        <h1>Atualizar Município</h1>
        <form action="atualizar_municipio.php" method="post" autocomplete="off">
            Nome do Município:
            <input type="text" name="cidade" value="" placeholder="Informe o nome da cidade" required>
            <br><br>
            UF:
            <input type="text" name="UF" value="" placeholder="Informe a UF" required>
            <br><br>
            ID do Município:
            <input type="text" name="idmunicipios" value="" placeholder="Informe o ID do município" required>
            <p>
            <input type="submit" value="Atualizar">
            <a href="inicio.php"><input type="button" value="Voltar"></a>
        </form>
    </center>
</body>
</html>
