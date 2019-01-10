<?php
include "../controller/dbmanager.php";
$arr = [];
$stmt = $conn->prepare("SELECT type,volumeHc,prixHc,taxe FROM typeFormation ");
$stmt -> execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $arr[] = $row;
}
$stmt = null;

foreach ($arr as $var){
    $prixhc = $var['prixHc'];
    $taxe = $var['taxe'];
    $ttc = $prixhc + ($prixhc * $taxe /100);
    echo "<tr>
                    <td >".$var['type']."</td>
                    <td >".$var['volumeHc']."</td>
                    <td >".$prixhc."</td>
                    <td >".$taxe."</td>
                    <td >".$ttc."</td>
                </tr>";
}
?>




