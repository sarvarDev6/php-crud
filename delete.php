<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $database = "php-crud";

    $connection = new mysqli($serverName, $userName, $password, $database);

    $sql = "DELETE FROM users WHERE id = $id";
    $connection->query($sql);
}

header("location: /php-crud/index.php");
exit;

?>