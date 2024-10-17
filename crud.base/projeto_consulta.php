<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Municípios</title>
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

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ccc;
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
            color: #4CAF50;
            margin-top: 20px;
            font-size: 16px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1><b><u>Projetos</u></b></h1>
    <p>
    <?php
    include_once "conexao.php";

    $sql = "SELECT * FROM projeto";
    $result = mysqli_query($conn, $sql);
    ?>

    <table>
        <thead>
            <tr>
                <th width="30%">Plan_code</th>
                <th width="70%">Plan_description</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) // O comando faz uma pesquisa no array automaticamente.
            {?>
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

    <a href="inicio.php">Voltar</a>
</body>
</html>
