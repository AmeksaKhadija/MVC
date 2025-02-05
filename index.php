<?php
include "APP/Core/Database.php";

try {

    Database::getInstance()->connect();

    echo 'Connection to the PostgreSQL database sever has been established successfully.';
} catch (PDOException $e) {

    echo $e->getMessage();
}
