<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Consulta</title>
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
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        input[type="button"] {
            background-color: #4CAF50; /* Cor verde */
            color: white;
            border: none;
            padding: 8px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100px; /* Largura do botão */
            margin-top: 20px; /* Margem superior para separar do conteúdo */
        }

        input[type="button"]:hover {
            background-color: #45a049; /* Cor ao passar o mouse */
        }
    </style>
</head>
<body>
    <center>
        <h1>
            <b><u>Trabalhos</u></b>
        </h1>
        <p>
        <?php
        include_once "conexao.php";

        $sql = "SELECT * FROM trabalho";
        $result = mysqli_query($conn, $sql);
        ?>

        <table border="0">
            <thead>
                <tr>
                    <th width="30%">Job_code</th>
                    <th width="70%">Job_description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
                ?>
                <tr>
                    <td><?php echo $row[0]; ?></td>
                    <td><?php echo $row[1]; ?></td>
                </tr>
                <?php
                } ?>
            </tbody>
        </table>

        <?php
        mysqli_close($conn);
        ?>

        <input type="button" value="Voltar" onclick="window.location.href='inicio.php';"> <!-- Botão Voltar -->
    </center>
</body>
</html>
