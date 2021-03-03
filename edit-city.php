<?php

    $id = $_REQUEST['id'];

    require_once 'settings/Connection.php';
    $connection = new Connection;
    $queryCity = $connection->connection()->prepare('SELECT * from cities where idcity = :id');
    $queryCity->bindValue(':id', $id);
    $queryCity->execute();
    $rows = $queryCity->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Editar de cidade</title>
        <link rel="stylesheet" href="css/city-registration.css" />
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

        <div class="registration-form">
            <p>Editar cidade</p>
            <form id="edit-form">
                <input type="hidden" id="id" value="<?php print $id; ?>" />
                <input type="text" placeholder="Cidade" value="<?php print $rows['city']; ?>" id="city" required />
                <select id="city-state">
                    <option value="<?php print $rows['citystate']; ?>"><?php print $rows['citystate']; ?></option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
                <input type="text" placeholder="País" value="<?php print $rows['country']; ?>"  disabled required />
                <input type="number" placeholder="População" value="<?php print $rows['citypopulation']; ?>" id="city-population" required />
                <input type="submit" value="Salvar" />
            </form>
        </div>

        <script src="js/edit-city.js"></script>
    </body>
</html>