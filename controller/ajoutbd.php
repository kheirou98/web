<?php
/**
 * Created by PhpStorm.
 * User: ISLEM
 * Date: 14/11/2018
 * Time: 15:56
 *
 * traite le formulaure d'ajout de formation
 */
if (!empty($_POST)) {
    $servername = "localhost:3308";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=tdw2", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

//$stmt = $conn->prepare("SELECT type,volumeHc,prixHc,taxe FROM typeFormation ");
//$stmt -> execute();
    $arr;
    echo $_POST["type"];
    echo $_POST["volumeHc"];
    echo $_POST["prixhc"];
    echo $_POST["taxe"];
    $stmt = $conn->prepare("INSERT INTO typeformation (type) VALUES (?)");
    $stmt->execute([$_POST['type']]);
    $stmt = null;

    $stmt = $conn->prepare("SELECT id FROM typeformation WHERE type = ?");
    $stmt->execute([$_POST['type']]);
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $arr = $row;
    }
    $stmt = null;

    $stmt = $conn->prepare("INSERT INTO formation (nom,type_id,volumeHc,prixHc,taxe) VALUE (?,?,?,?,?)");
    $stmt->execute([$_POST['nom'],$arr['id'],$_POST["volumeHc"],$_POST["prixhc"],$_POST["taxe"]]);
    $stmt = null;
}
