<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incluir Projeto</title>
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

        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }

        /* Estilo do Formulário */
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-size: 16px;
            color: #555;
            text-align: left;
        }

        input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            font-size: 16px;
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
<div class="form-container">
        <h1>Incluir Funcionário</h1>
        <form action="salvar_projetos.php" method="post" autocomplete="off">
            <label for="Plan_description">Descreva o projeto:</label>
            <input type="text" name="Plan_description" id="Plan_description" placeholder="Informe o nome do projeto" autofocus required>
            <input type="submit" value="Salvar">
            <input type="button" value="Voltar" onclick="window.location.href='inicio.php';"> <!-- Botão Voltar -->
        </form>
    </div>
</body>
</html>