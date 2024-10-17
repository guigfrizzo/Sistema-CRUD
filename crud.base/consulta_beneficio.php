<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Consulta</title>
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

        /* Estilo da Tabela */
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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

        /* Estilo do Link de Voltar */
        a {
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
            margin-top: 20px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h1>
        <b><u>Benefício</u></b>
    </h1>

    <?php
    include_once "conexao.php";

    $sql = "SELECT * FROM beneficio";
    $result = mysqli_query($conn, $sql);
    ?>

    <table>
        <thead>
            <tr>
                <th width="50%">Job_code</th>
                <th width="50%">Emp_lname</th>
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
            }
            ?>
        </tbody>
    </table>

    <?php
    mysqli_close($conn);
    ?>

    <a href="inicio.php">Voltar</a>
</body>

</html>
