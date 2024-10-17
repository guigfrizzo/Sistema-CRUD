<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incluir Município</title>
    <style>
        /* Estilos Gerais */
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }

        h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: left;
        }

        input[type="text"] {
            width: 95%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 8px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        input[type="button"] {
            background-color: #f44336; /* Cor de fundo para o botão Voltar */
            color: white;
            border: none;
            padding: 8px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            margin-top: 10px; /* Margem superior para separar do botão Salvar */
        }

        input[type="button"]:hover {
            background-color: #d32f2f; /* Cor ao passar o mouse */
        }
    </style>
</head>
<body>

    <form action="salvar_municipios.php" method="post" autocomplete="off">
    <center><h1>Incluir Município</h1></center>
        Nome do Município:
        <input type="text" name="cidade" value="" placeholder="Informe o nome da cidade" autofocus required>
        <br>
        UF:
        <input type="text" name="UF" value="RS" required>
        <p>
        <input type="submit" value="Salvar">
        <input type="button" value="Voltar" onclick="window.location.href='inicio.php';"> <!-- Botão Voltar -->
    </form>
</body>
</html>
