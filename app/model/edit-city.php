<?php

    $id = $_REQUEST['id'];
    $city = $_REQUEST['city'];
    $citystate = $_REQUEST['citystate'];
    $citypopulation = intval($_REQUEST['citypopulation']);

    require_once '../../settings/Connection.php';
    $connection = new Connection;
    $updateCity = $connection->connection()->prepare('UPDATE cities set city = :city, citystate = :citystate, citypopulation = :citypopulation where idcity = :id');
    $updateCity->bindValue(':id', $id);
    $updateCity->bindValue(':city', $city);
    $updateCity->bindValue(':citystate', $citystate);
    $updateCity->bindValue(':citypopulation', $citypopulation);
    $updateCity->execute();
    print '<script>window.location.href = "../../";</script>';