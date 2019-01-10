<?php
/**
 * Created by PhpStorm.
 * User: ISLEM
 * Date: 07/11/2018
 * Time: 16:39
 */

$servername = "localhost:3308";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=tdw2", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}


?>