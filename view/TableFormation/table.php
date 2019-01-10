<?php
/**
 * Created by PhpStorm.
 * User: ISLEM
 * Date: 07/11/2018
 * Time: 09:51
 */

    /*$json = file_get_contents("public/json/formation.json");

    //var_dump(json_decode($json));
     $js = json_decode($json);
    //echo $js[0]->{'formation'};
    foreach ($js as $j){
        $prixhc = $j->{'prixhc'};
        $taxe = $j->{'taxe'};
        $ttc = $prixhc + ($prixhc * $taxe /100);
        echo "<tr>
                    <td >".$j->{'formation'}."</td>
                    <td >".$j->{'volumeHoraire'}."</td>
                    <td >".$prixhc."</td>
                    <td >".$taxe."</td>
                    <td >".$ttc."</td>
                </tr>";
    }
*/
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




