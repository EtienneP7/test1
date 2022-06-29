<?php

try{
    $dbhost = 'localhost';
    $dbname='tp1';
    $dbuser = 'root';
    $dbpass = '';
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser,
    $dbpass);
    }catch (PDOException $e) {
    echo "Error : " . $e->getMessage() . "<br/>";
    die();
}

?>