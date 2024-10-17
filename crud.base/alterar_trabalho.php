<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Trabalho</title>
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
        <h1>Alterar Trabalho</h1>
        <form action="update_trabalho.php" method="post" autocomplete="off">
            <label for="Job_code">Código do trabalho</label>
            <input type="text" name="Job_code" id="Job_code" placeholder="Informe o código do trabalho" required>

            <label for="Job_description">Descrição do trabalho</label>
            <input type="text" name="Job_description" id="Job_description" placeholder="Informe a descrição do trabalho" required>

            <div class="form-buttons">
                <input type="submit" value="Alterar">
                <a href="inicio.php"><input type="button" value="Voltar"></a>
            </div>
        </form>
    </div>
</body>

</html>
