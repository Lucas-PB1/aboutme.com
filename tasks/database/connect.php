<?php

/**
 *
 *@return \PDO
 */
function connect_me() {
    $dsn = "mysql:host=localhost;dbname=aboutme;charset=utf8";
    $user = "root";
    $password = "";

    try {
        $pdo = new PDO($dsn, $user, $password);
        return $pdo;
    } catch (PDOException $ex) {
        echo "Erro: " . $ex->getMessage();
    }
}