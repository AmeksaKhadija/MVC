<?php
include 'app/Core/Database.php';

try {

    Database::getInstance()->connect();

    echo 'hello world!';
} catch (PDOException $e) {

    echo $e->getMessage();
}
