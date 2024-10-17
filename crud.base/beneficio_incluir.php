<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <title>Incluir Benefício</title>
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

        select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            font-size: 16px;
            appearance: none; /* Remove a seta padrão do select */
            background-color: #fff;
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
        <h1>Incluir Benefício</h1>
        <form action="salvar_beneficio.php" method="post" autocomplete="off">
            <label for="funcionario">Nome do Funcionário</label>
            <select id="funcionario" name="funcionario">
                <option value="" selected>Selecione...</option>
                <?php 
                include_once "conexao.php";
                // conexão
                $sql1 = "SELECT Emp_code, Emp_lname FROM funcionario ORDER BY Emp_lname";
                $resultado1 = mysqli_query($conn, $sql1);
                while ($linha1 = mysqli_fetch_array($resultado1, MYSQLI_NUM)) { ?>
                    <option value="<?php echo $linha1[0]; ?>"><?php echo $linha1[1]; ?></option>
                <?php } ?>
            </select>

            <label for="projeto">Nome do Projeto</label>
            <select id="projeto" name="projeto">
                <option value="" selected>Selecione...</option>
                <?php 
                // conexão
                $sql2 = "SELECT Plan_code, Plan_description FROM projeto ORDER BY Plan_description";
                $resultado2 = mysqli_query($conn, $sql2);
                while ($linha2 = mysqli_fetch_array($resultado2, MYSQLI_NUM)) { ?>
                    <option value="<?php echo $linha2[0]; ?>"><?php echo $linha2[1]; ?></option>
                <?php } ?>
            </select>

            <div class="form-buttons">
                <input type="submit" value="Salvar">
                <a href="inicio.php"><input type="button" value="Voltar"></a>
            </div>
        </form>
        <?php
        mysqli_close($conn);
        ?>
    </div>
</body>

</html>
