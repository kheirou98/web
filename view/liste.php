<?php
/**
 * Created by PhpStorm.
 * User: ISLEM
 * Date: 07/11/2018
 * Time: 13:15
 */




//include "../controller/dbmanager.php";

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

$stmt = $conn->prepare("SELECT type FROM typeformation");
$stmt -> execute();

$arr = [];
$arr1 = [];
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $arr[] = $row['type'];
}
$stmt = null;
for ($i=0;$i<count($arr);$i++){

    echo "<li class=\"dropdown\">
            <a href=\"#\" class=\"lien\">".$arr[${'i'}]."</a>
            <div class=\"dropdown-content\">";


    $stmt = $conn->prepare("SELECT nom FROM formation WHERE type_id = ? ");
    $stmt -> execute([${'i'}+1]);

    $arr1 = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $arr1[] = $row['nom'];
    }
    for ($j=0;$j<count($arr1);$j++) {
        echo "<p><a href=\"#\" class=\"lien\">".$arr1[${'j'}]."</a></p>";
    }
    $stmt = null;
    echo "</div>
        </li>";


}

