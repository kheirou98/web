<?php
/**
 * Created by PhpStorm.
 * User: ISLEM
 * Date: 28/11/2018
 * Time: 13:22
 */
include "dbmanager.php";
$stmt = $conn->prepare("DELETE FROM typeformation WHERE type=?");
$stmt->execute([$_POST['type']]);
$stmt = null;