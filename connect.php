<?php
function connect()
{
    $dsn = "mysql:host=localhost;dbname=demodb;charset=utf8";
    $username = "root";
    $password = "";
    try {
        return new PDO($dsn,$username,$password);
    }catch (PDOException $exception){
        die($exception->getMessage());
    }
}