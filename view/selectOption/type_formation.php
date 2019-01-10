<?php
/**
 * Created by PhpStorm.
 * User: nedda
 * Date: 09/12/2018
 * Time: 16:40
 */

include "../controller/dbmanager.php";

$arr = [];
$stmt = $conn->prepare("SELECT type FROM typeFormation ");
$stmt -> execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $arr[] = $row;
}

foreach ($arr as $var) {
    echo "<option value='".$var['type']."' >".$var['type']."</option>";
}
$stmt = null;

