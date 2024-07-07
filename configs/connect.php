<?php

// SERVERDAKİ bilgiler
// $username = "mbeyazil_intek";
// $password = "8gfUzEtx029u";
// $hostname = "localhost";
// $database = "mbeyazil_intek";

$username = "root";
$password = "";
$hostname = "localhost";
$database = "intek";
global $con;
try {
    $con = new PDO(
        "mysql:host=$hostname;dbname=$database",
        $username,
        $password,
        array(pdo::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
       
    );

} catch (PDOException $ex) {
    echo "Bağlantı başarısız!" . $ex->getMessage();
};

