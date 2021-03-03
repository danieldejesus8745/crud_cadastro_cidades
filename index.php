<?php

    require_once 'settings/Connection.php';
    $connection = new Connection;
    $queryCities = $connection->connection()->prepare('SELECT * from cities');
    $queryCities->execute();

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Lista de cidades</title>
        <link rel="stylesheet" href="css/index.css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link rel="shortcut icon" href="img/icon.webp" type="image/x-icon" />
    </head>
    <body>

        <header class="header">
            <nav class="menu">
                <ul>
                    <li><a href="index.php">Lista de cidades</a></li>
                    <li><a href="registration-city.php">Cadastrar cidade</a></li>
                </ul>
            </nav>
        </header>

        <div class="cities-table">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>País</th>
                        <th>População</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while ($rows = $queryCities->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr>
                            <td><?php print $rows['idcity']; ?></td>
                            <td><?php print $rows['city']; ?></td>
                            <td><?php print $rows['citystate']; ?></td>
                            <td><?php print $rows['country']; ?></td>
                            <td><?php print number_format($rows['citypopulation'], 0, '.', '.'); ?></td>
                            <td class="material-icons icons"><a href="edit-city.php?id=<?php print $rows['idcity']; ?>">create</a></td>
                            <td class="material-icons icons" onclick="deleteCity(<?php print $rows['idcity']; ?>)">delete</td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>

        <script src="js/script.js"></script>
    </body>
</html>