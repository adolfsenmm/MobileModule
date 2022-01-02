<?php
define("DB_HOST", "localhost");
define("DB_NAME", "maren_dogs");
define("DB_USER", "maren_dogs");
define("DB_PASS", "maren123");

try {
    $Conn=new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
    $Conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    $Conn->setAttribute(PDO::ATTR_PERSISTENT,true);
    $Conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
    echo $e->getMessage();
    exit();
}