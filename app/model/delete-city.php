<?php

    $id = $_REQUEST['id'];

    require_once '../../settings/Connection.php';
    $connection = new Connection;
    $deleteCity = $connection->connection()->prepare('DELETE from cities where idcity = :id');
    $deleteCity->bindValue(':id', $id);
    $deleteCity->execute();
    print '<script>window.location.href = "../../";</script>';