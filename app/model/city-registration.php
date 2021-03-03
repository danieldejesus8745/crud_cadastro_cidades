<?php

    $city = $_REQUEST['city'];
    $citystate = $_REQUEST['citystate'];
    $citypopulation = intval($_REQUEST['citypopulation']);

    require_once '../../settings/Connection.php';
    $connection = new Connection;
    $validateName = $connection->connection()->prepare('SELECT city,citystate from cities where city = :city and citystate = :citystate');
    $validateName->bindValue(':city', $city);
    $validateName->bindValue(':citystate', $citystate);
    $validateName->execute();
    if ($validateName->rowCount() >= 1) {
        print '<script>alert("Cidade já cadastrada");</script>';
        print '<script>window.location.href = "../../registration-city.php";</script>';
    } else {
        $signingup = $connection->connection()->prepare('INSERT INTO cities(city, citystate, citypopulation) values(:city, :citystate, :citypopulation)');
        $signingup->bindValue(':city', $city);
        $signingup->bindValue(':citystate', $citystate);
        $signingup->bindValue(':citypopulation', $citypopulation);
        $signingup->execute();

        print '<script>window.location.href = "../../";</script>';
    }